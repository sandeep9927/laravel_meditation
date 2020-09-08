<?php

namespace App\Http\Controllers;

use App\ChildCategory;
use App\ParentCategory;
use App\Technique;
use App\Blog;
use Illuminate\Http\Request;

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
        return view('admin.technique.techniques_cat_mgmt', compact('techniques'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_parent = ParentCategory::find($id);
        return view('admin.technique.edit_parent', compact('edit_parent'));
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
        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $update_technique->title = $request->input('title');
        $update_technique->image = $filename;
        $update_technique->status = $request->input('status');

        if ($update_technique->save()) {
            return redirect("techniques")->with('message', 'technique Successfully Updated');
        } else {
            return redirect("techniques/$update_technique->id/edit")->with('message', 'Failed To Updated');
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
        if ($delete->delete()) {
            return redirect("techniques")->with('message', 'Technique Successfully Deleted');
        } else {
            return redirect("techniques")->with('message', 'Failed To Delete');
        }
    }

    public function technique()
    {
        $techniques = ChildCategory::all();
        return view('technique.technique', compact('techniques'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_techniuqe = ChildCategory::find($id);
        return view('technique.show_technique', compact('show_techniuqe'));
    }

    public function rate(Request $request)
    {
        // request()->validate(['rate' => 'required']);
        $post = ChildCategory::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        return redirect("/home/technique");

    }

}
