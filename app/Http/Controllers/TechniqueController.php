<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;
use App\ParentCategory;

class TechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techniques = ParentCategory::paginate(10);
        return view('admin.technique.techniques_cat_mgmt',compact('techniques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function show(Technique $technique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_parent = ParentCategory::find($id);
        return view('admin.technique.edit_parent',compact('edit_parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_technique = ParentCategory::find($id);
        if($request->hasFile('image') && $request->image->isValid()){
            $extension = $request->image->extension();
            $filename = time()."_.".$extension;
            $request->image->move(public_path('images'),$filename);
        }else{
            $filename = "no-image.jpg";
        }
        $update_technique->title = $request->input('title');
        $update_technique->image = $filename;
        $update_technique->status = $request->input('status');
       
        if($update_technique->save()){
            return redirect("techniques")->with('message','technique Successfully Updated');
        }else{
            return redirect("techniques/$update_technique->id/edit")->with('message','Failed To Updated');
        }
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ParentCategory::find($id);
        if($delete->delete()){
            return redirect("techniques")->with('message','Technique Successfully Deleted');
        }else{
            return redirect("techniques")->with('message','Failed To Delete');
        }
    }
}
