<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

    public function show()
    {
        return view('profiles.profile');
    }

    public function edit()
    {   
        return view('profiles.edit_profile')->with('user', Auth::user());
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'dob' => 'required|before:-4 years',

        ]);

        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->date_of_birth = $request->input('dob');
        $user->password = $request->input('password');
        $user->image = $filename;
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('profile')->with('message', 'You Profile Successfully Updated');
    }
    public function userprofile()
    {
        return $this->edit(auth()->user()->id);
    }

    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
