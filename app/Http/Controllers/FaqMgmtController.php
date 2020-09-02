<?php

namespace App\Http\Controllers;

use App\FaqMgmt;
use Illuminate\Http\Request;

class FaqMgmtController extends Controller
{
  
    public function index()
    {
        $show_faq = FaqMgmt::all();
        return view('admin.faqs.faqs_mgmt',compact('show_faq'));
    }

    public function create()
    {
        return view('admin.faqs.create_faq'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'cat'=> 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        $faq_mgmt = new FaqMgmt;
        $faq_mgmt->title = $request->input('name');
        $faq_mgmt->description = $request->input('description');
        $faq_mgmt->faq_cat_id = $request->input('cat');
        $faq_mgmt->status = $request->input('status');
        $faq_mgmt->save();
        return redirect('faqs')->with('message','FAQ Successfully Created');
    
    }

    public function show()
    {
        $show_faq = FaqMgmt::all();
        return view('admin.faqs.faqs_mgmt',compact('show_faq'));
    }

    public function edit($id)
    {
        $edit_faq = FaqMgmt::find($id);
        return view('admin.faqs.edit_faq',compact('edit_faq'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'cat'=> 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        $update_faq = FaqMgmt::find($id);
        $update_faq->title =$request->input('name');
        $update_faq->description =$request->input('description');
        $update_faq->status =$request->input('status');
        $update_faq->faq_cat_id =$request->input('cat');
        $update_faq->save();
        return redirect('faqs')->with('message','FAQ Successfully Updated');
    }

    public function destroy($id)
    {
        $delete_faq = FaqMgmt::find($id);
        $delete_faq->delete();
        return redirect('faqs')->with('message','FAQ Successfully Deleted');
    }
}
