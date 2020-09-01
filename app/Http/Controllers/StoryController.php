<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create_story');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $story = new Story;
        $story->title = $request->input('title');
        $story->image = $request->input('image');
        $story->short_description = $request->input('short_description');
        $story->description = $request->input('description');
        $story->writer_id = $request->input('writer');
        $story->dep_id = $request->input('department');
        $story->status = $request->input('status');
        // dd($story);
        $story->save();
        return redirect('create_story')->with('message','Story Successfully Created');
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
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $story = Story::all();
        return view('admin.story_mgmt',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_story = Story::find($id);
        return view('admin.story_edit',compact('edit_story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update_story = Story::find($id);
        if($request->hasFile('image') && $request->image->isValid()){
            $extension = $request->image->extension();
            $filename = time()."_.".$extension;
            $request->image->move(public_path('images'),$filename);
        }else{
            $filename = "no-image.jpg";
        }
        $update_story->title = $request->input('title');
        $update_story->image = $filename;
        $update_story->short_description = $request->input('short_description');
        $update_story->description = $request->input('description');
        $update_story->status = $request->input('status');
        $update_story->writer_id = $request->input('writer');
        $update_story->dep_id = $request->input('department');
        // dd($update_story);
        $update_story->save();
        return redirect("story/$update_story->id/edit")->with('message','Story Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        
    }
}
