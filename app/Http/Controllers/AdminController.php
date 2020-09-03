<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
   

    public function index(){
        $writers = User::all()->where('role_id','=',3);
        return view('admin.writer.writer_mgmt',compact('writers'));
    }

    public function edit($id)
    {
        $writer_edit = User::find($id);
        return view('admin.writer.writer_edit',compact('writer_edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:50',
            'email' => 'email:rfc,dns',
            'password' => 'password:api',
            'role' => 'required',
            'status' => 'required',
            'number' => 'required',
        ]);

        $writer_update = User::find($id);

        if($request->hasFile('image') && $request->image->isValid()){
            $extension = $request->image->extension();
            $filename = time()."_.".$extension;
            $request->image->move(public_path('images'),$filename);
        }else{
            $filename = "no-image.jpg";
        }
        $writer_update->name = $request->input('username');
        $writer_update->email = $request->input('email');
        $writer_update->password = $request->input('password');
        $writer_update->role_id = $request->input('role');
        $writer_update->user_status = $request->input('status');
        $writer_update->mobile = $request->input('number');
        $writer_update->image = $filename;
        $writer_update->save();
        return redirect("writers/".$id."/edit")->with('message','Writer Successfully Updated');
    }

    public function destroy($id)
    {
        $writer_delete = User::find($id);
        $writer_delete->delete();
        return redirect('writers')->with('message','Writer Successfully Deleted');

    }

    public function admin(){
        return view('admin.admin_login');
    }
    public function adminlogin(Request $request){
        $request->validate([
            'email' => 'email',
            'password' => 'required',
        ]);
        $user_data = [
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
            'role_id'=>1,
        ];
        if(Auth::attempt($user_data)){
            return redirect('cms_user')->with('message','You have successfully logged in');
        }else{
            
            return redirect('admin/login')->with('message','These credentials do not match our records.');
        }
    } 

}
