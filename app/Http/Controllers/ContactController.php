<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
    	return view ('contact');
    }

    public function mail(Request $request)
    {
    	$this->validate($request, [
      	'name'     =>  'required',
      	'email'  =>  'required|email',
      	'subject' =>  'required',
      	'message' =>  'required'
     	]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'subject'	=>	$request->subject,
            'message'   =>   $request->message
        );
    	Mail::to('suyashpainuly@gmail.com')->send(new Contact($data));
    	return back()->with('success','E-Mail sent');
    }
}
