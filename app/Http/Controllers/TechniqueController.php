<?php

namespace App\Http\Controllers;

use App\ChildCategory;
use App\ParentCategory;
use App\Technique;
use App\Comment;
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
        $techniques = Technique::paginate(10);
        return view('admin.technique.techniques_cat_mgmt', compact('techniques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cat_id = ParentCategory::all();
        $child_cat_id = ChildCategory::all();
        return view('admin.technique.create_tec', compact('parent_cat_id'), compact('child_cat_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'parent' => 'required',
            'child' => 'required',
        ]);

        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $story = new Technique;
        $story->title = $request->title;
        $story->image = $filename;
        $story->short_description = $request->input('short_description');
        $story->description = $request->input('description');
        $story->parent_cat_id = $request->parent;
        $story->child_cat_id = $request->child;
        $story->faqs = $request->faqs;

        if ($story->save()) {
            return redirect('techniques')->with('message', 'techniques Successfully Created');
        } else {
            return redirect('techniques/create')->with('message', 'Failed to create story');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technique  $technique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_cat_id = ParentCategory::all();
        $child_cat_id = ChildCategory::all();
        $edit_tec = Technique::find($id);
        return view('admin.technique.edit_tec', compact('edit_tec', 'parent_cat_id', 'child_cat_id'));
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
        $update_technique = Technique::find($id);
        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $update_technique->title = $request->title;
        $update_technique->image = $filename;
        $update_technique->short_description = $request->short_description;
        $update_technique->description = $request->description;
        $update_technique->parent_cat_id = $request->parent;
        $update_technique->child_cat_id = $request->child;

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
        $delete = Technique::find($id);
        if ($delete->delete()) {
            return redirect("techniques")->with('message', 'Technique Successfully Deleted');
        } else {
            return redirect("techniques")->with('message', 'Failed To Delete');
        }
    }

    public function technique()
    {
        $techniques = Technique::all();
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
        $show_techniuqe = Technique::find($id);
        $recommended_techniques = Technique::inRandomOrder()->limit(5)->get();
        $comments = Comment::all();
        // return view('technique.show_technique', compact('show_techniuqe'));
        return view('technique.show_technique', compact('show_techniuqe','recommended_techniques','comments'));
    }

    public function rate(Request $request)
    {
        //request()->validate(['rate' => 'required']);
        $post = Technique::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        return redirect("/home/technique");

    }

}
