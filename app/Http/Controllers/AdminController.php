<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function writer()
    {
        $writers = User::all()->where('role_id','=',3);
        return view('admin.writer_mgmt',compact('writers'));
    }

    public function WriterEdit($id){
        $writer_edit = User::find($id);
        return view('admin.writer_edit',compact('writer_edit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function WriterUpdate(Request $request,$id)
    {
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
        // dd($writer_update);
        $writer_update->save();
        return redirect("writer_mgmt/".$id."/edit")->with('message','Writer Successfully Updated');
    }

    public function destroy($id)
    {
        $writer_delete = User::find($id);
        // dd($user_delete);
        $writer_delete->delete();
        return redirect('site_user')->with('message','Writer Successfully Deleted');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    
}
