<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cms_user()
    {
        $users = User::all();//where('role_id', '=', 2);
        return view('admin.cms_user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image') && $request->image->isValid()){
            $extension = $request->image->extension();
            $filename = time()."_.".$extension;
            $request->image->move(public_path('images'),$filename);
        }else{
            $filename = "no-image.jpg";
        }
        $user = new User;
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');
        $user->password = $request->input('password');
        $user->user_status = $request->input('status');
        $user->mobile = $request->input('number');
        $user->image = $filename;
        if($request->has('password')){
            $user->password = Hash::make($request->password);
        }
        // dd($user);
        $user->save();
        
        return redirect('create_user')->with('message','User Successfully Creaeted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit_user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   if($request->hasFile('image') && $request->image->isValid()){
        $extension = $request->image->extension();
        $filename = time()."_.".$extension;
        $request->image->move(public_path('images'),$filename);
    }else{
        $filename = "no-image.jpg";
    }
        $user_upadte = User::find($id);
        $user_upadte->name = $request->input('username');
        $user_upadte->email = $request->input('email');
        $user_upadte->password = $request->input('password');
        $user_upadte->role_id = $request->input('role');
        $user_upadte->user_status = $request->input('status');
        $user_upadte->mobile = $request->input('number');
        $user_upadte->image = $filename;
        dd($user_upadte);
        $user_upadte->save();
        return redirect("site_user/".$id."/edit")->with('message','User Successfully Updated');
    }
    public function site_user()
    {
        $users = User::all()->where('role_id','=',4);
        return view('admin.site_user',compact('users'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_delete = User::find($id);
        // dd($user_delete);
        $user_delete->delete();
        return redirect('site_user')->with('message','User Successfully Deleted');

    }

    public function Admin(){
        return view('admin.admin_login');
    }
    public function AdminLogin(Request $request){
        $user_data = [
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
        ];
        if(Auth::attempt($user_data)){
            return redirect('cms_user')->with('message','You have successfully logged in');
        }else{
            
            return redirect('admin')->with('message','These credentials do not match our records.');
        }
    } 

}
