<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Technique;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('admin.blog.bie_mgmt', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $techniques = Technique::all();
        return view('admin.blog.create_bie', compact('techniques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $request->validate([
            'title' => 'required|max:200',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'type' => 'required',
            'technique' => 'required',
        ]);
        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filename);
        } else {
            $filename = "no-image.jpg";
        }
        $blog->title = $request->title;
        $blog->image = $filename;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->type = $request->type;
        $blog->technique_id = $request->technique;
        $blog->writer_id = Auth::user()->id;
       
        if ($blog->save()) {
            return redirect('blogs')->with('message', 'Blog Successfully Created');
        } else {
            return redirect('blogs/create')->with('message', 'Failed TO create Blog');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $blogs_suggestion = Blog::inRandomOrder()->paginate(3);
        return view('admin.blog.show', compact('blog'), compact('blogs_suggestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_blog = Blog::find($id);
        $techniques = Technique::all();
        return view('admin.blog.edit_blog', compact('edit_blog','techniques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_blog = Blog::find($id);
        if ($request->hasFile('image') && $request->image->isValid()) {
            $extension = $request->image->extension();
            $filemane = time() . "_." . $extension;
            $request->image->move(public_path('images'), $filemane);
        } else {
            $filemane = "no-image.png";
        }
        $update_blog->title = $request->title;
        $update_blog->image = $filemane;
        $update_blog->short_description = $request->short_description;
        $update_blog->description = $request->description;
        $update_blog->status = $request->status;
        $update_blog->type = $request->type;
        $update_blog->technique_id = $request->technique;
        if ($update_blog->save()) {
            return redirect('blogs')->with('message', 'Blog Successfully Updated');
        } else {
            return redirect("blogs/$id/edit")->with('message', 'Failed to update Blog');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog->delete()) {
            return redirect('blogs')->with('message', 'Blog Successfully Deleted');
        } else {
            return redirect('blogs')->with('message', 'Failed to delete Blog');
        }
    }
}
