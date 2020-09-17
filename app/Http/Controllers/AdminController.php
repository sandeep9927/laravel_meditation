<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('can:isAdmin')->except('admin', 'adminlogin');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = User::orderBy('created_at', 'desc')->where('role_id', '=', 3)->paginate(10);
        return view('admin.writer.writer_mgmt', compact('writers'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $status = $request->status;
        $writers = DB::table('users')->where('name', 'like', '%' . $search . '%')->orwhere('user_status', 'like', '%' . $status . '%')->paginate(10);
        return view('admin.writer.writer_mgmt', compact('writers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $writer_edit = User::find($id);
        return view('admin.writer.writer_edit', compact('writer_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:50',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'status' => 'required',
            'number' => 'required',
        ]);

        $writer_update = User::find($id);

        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $writer_update->name = $request->input('username');
        $writer_update->email = $request->input('email');
        $writer_update->password = $request->input('password');
        $writer_update->user_status = $request->input('status');
        $writer_update->mobile = $request->input('number');
        $writer_update->image = $filename;
        if ($request->has('password')) {
            $writer_update->password = Hash::make($request->password);
        }
        $writer_update->save();
        return redirect("writers")->with('message', 'Writer Successfully Updated');
    }


    public function profile()
    {
        return $this->edit(auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
        $writer_delete = User::find($id);
        $writer_delete->delete();
        return redirect('writers')->with('message', 'Writer Successfully Deleted');

    }

    public function admin()
    {
        return view('admin.admin_login');
    }
    public function adminlogin(Request $request)
    {



        $request->validate([
            'email' => 'email',
            'password' => 'required',
        ]);

        $user_data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ];
        if (Auth::attempt($user_data) && Gate::allows('isAdmin') || Gate::allows('isBlogger'))
        {
            return redirect('cms_user')->with('message', 'Welcome Admin');
        } 
        elseif(Auth::attempt($user_data) && Gate::allows('isWriter'))
        {
            return redirect('writers')->with('message', 'Welcome writer..You are ready to create stuff');
        } 
        else
        {
            return redirect('admin/login')->with('message', 'These credentials do not match our records.');
        }
    }

}
