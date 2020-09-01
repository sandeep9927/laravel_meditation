<?php

namespace App\Http\Controllers;

use App\FaqMgmt;
use Illuminate\Http\Request;

class FaqMgmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create_faq');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $faq_mgmt = new FaqMgmt;
        $faq_mgmt->title = $request->input('name');
        $faq_mgmt->description = $request->input('description');
        $faq_mgmt->faq_cat_id = $request->input('cat');
        $faq_mgmt->status = $request->input('status');
        // dd($faq_mgmt);
        $faq_mgmt->save();
        return redirect('create_faq')->with('message','FAQ Successfully Created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FaqMgmt  $faqMgmt
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show_faq = FaqMgmt::all();
        return view('admin.faqs_mgmt',compact('show_faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FaqMgmt  $faqMgmt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_faq = FaqMgmt::find($id);
        return view('admin.edit_faq',compact('edit_faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FaqMgmt  $faqMgmt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update_faq = FaqMgmt::find($id);
        $update_faq->title =$request->input('name');
        $update_faq->description =$request->input('description');
        $update_faq->status =$request->input('status');
        $update_faq->faq_cat_id =$request->input('cat');
        // dd($update_faq);
        $update_faq->save();
        return redirect('show_faq')->with('message','FAQ Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FaqMgmt  $faqMgmt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_faq = FaqMgmt::find($id);
        $delete_faq->delete();
        return redirect('show_faq')->with('message','FAQ Successfully Deleted');
    }
}
