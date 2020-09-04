<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Gate;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('admin','adminlogin');
    }

    public function index(){
        $writers = User::orderBy('created_at', 'desc')->where('role_id','=',3)->paginate(10);
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
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
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
        //User::adminvalidate();
        // if(!Gate::allows('isAdmin')){
        //     abort(404,'soryy your not able access this page');
        // }  
        $user_data = [
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
            
        ];
        if(Auth::attempt($user_data) && Gate::allows('isAdmin') || Gate::allows('isBlogger') || Gate::allows('isWriter')){
            return redirect('cms_user')->with('message','You have successfully logged in');
        }else{
            
            return redirect('admin/login')->with('message','These credentials do not match our records.');
        }
    } 

}
