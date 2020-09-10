<?php

namespace App\Http\Controllers;

use App\Notifications\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['can:isAdmin', 'can:isWriter', 'can:isBlogger'])->except('admin', 'adminlogin');
    // }
    public function cms_user()
    {
        $users = User::paginate(10);
        return view('admin.user.cms_user', compact('users'));
    }

    public function cms_users_edit($id)
    {
        $cms_users = User::find($id);
        return view('admin.user.cms_user');
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

        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
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
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        if ($user->save()) {
            if ($request->notify) {
                $user->notify(new UserCreated());
            }

            return redirect('users/create')->with('message', 'User Successfully Created');
        } else {
            return redirect('stories/create')->with('message', 'Failed to create User');
        }

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
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
        $user_upadte->save();
        return redirect("site_user/" . $id . "/edit")->with('message', 'User Successfully Updated');
    }
    public function updateprofile()
    {
        return $this->edit(auth()->user()->id);
    }
    public function site_user()
    {
        $users = User::all()->where('role_id', '=', 4);
        return view('admin.user.site_user', compact('users'));
    }

    public function destroy($id)
    {
        $user_delete = User::find($id);
        $user_delete->delete();
        return redirect('site_user')->with('message', 'User Successfully Deleted');

    }
    public function writerprofie(){
        return $this->edit(auth()->user()->id);
    }

}



