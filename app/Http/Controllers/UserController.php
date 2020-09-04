<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
   
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('cms_user');
    }
    public function cms_user()
    {
        $users = User::paginate(10);//where('role_id', '=', 2);
        return view('admin.user.cms_user',compact('users'));
    }

    public function create()
    {
        return view('admin.user.create_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:50',
            'email' => 'email:rfc,dns',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'role' => 'required',
            'status' => 'required',
            'number' => 'required',
        ]);

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
        $user->save();
        
        return redirect('users/create')->with('message','User Successfully Creaeted');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit_user',compact('user'));
    }

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
        // dd($user_upadte);
        $user_upadte->save();
        return redirect("site_user/".$id."/edit")->with('message','User Successfully Updated');
    }
    public function site_user()
    {
        $users = User::all()->where('role_id','=',4);
        return view('admin.user.site_user',compact('users'));
    }

    public function destroy($id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();
        return redirect('site_user')->with('message','User Successfully Deleted');

    }

}
