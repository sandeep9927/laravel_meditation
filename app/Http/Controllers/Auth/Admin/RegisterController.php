<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyUserByEmail;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => 4,
            'password' => Hash::make($data['password']),
            'verifyToken'=> Str::random(25),
        ]);
        mail::to($user->email)->send(new verifyUserByEmail($user));
        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);
        Auth::logout();
        if ($response = $this->registered($request, $user)) {
            return $response;
        }
        return redirect('login')->with('message','Check Your Email To verify Account');


        // return $request->wantsJson()
        //             ? new Response('', 201)
        //             : redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        //
    }

    public function verifyUser($email,$token){
        $user = User::where(['email'=>$email,'verifyToken'=>$token])->first();
        if($user){
            $user->verifyToken ='';
            $user->status=1;
            if($user->save()){
                return redirect('login')->with('message','Your Account Successfully Verified');
            }else{
                return redirect('login')->with('message','Invalid Token or Email');
            }
        
    }else{
        return redirect('login')->with('message','Invalid Token or Email');
    }
    }
   
}

