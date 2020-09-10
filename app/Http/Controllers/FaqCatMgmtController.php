<?php

namespace App\Http\Controllers;

use App\FaqCatMgmt;
use Illuminate\Http\Request;

class FaqCatMgmtController extends Controller
{

    public function index()
    {
        $faq_cats = FaqCatMgmt::paginate(10);
        return view('admin.faqs.faq_cat_mgmt', compact('faq_cats'));
    }

    public function create()
    {
        return view('admin.faqs.create_faq_cat');
    }

    public function store(Request $request)
    {
        $faq_cat_create = new FaqCatMgmt;
        $faq_cat_create->title = $request->title;
        $faq_cat_create->status = $request->status;
        if ($faq_cat_create->save()) {
            return redirect("faqcats")->with('message', 'Writer Successfully Created');
        } else {
            return redirect("faqcats/create ")->with('message', 'Failed to create');
        }

    }

    public function show(FaqCatMgmt $faqCatMgmt)
    {
        //
    }

    public function edit($id)
    {
        $edit_faq_cat = FaqCatMgmt::find($id);
        return view('admin.faqs.edit_faq_cat', compact('edit_faq_cat'));
    }

    public function update(Request $request, $id)
    {
        $faqCatMgmt = FaqCatMgmt::find($id);
        $faqCatMgmt->title = $request->title;
        $faqCatMgmt->status = $request->status;
        if ($faqCatMgmt->save()) {
            return redirect("faqcats")->with('message', 'Writer Successfully Upadted');
        } else {
            return redirect("faqcats/create ")->with('message', 'Failed to update');
        }
    }

    public function destroy($id)
    {
        $faqCatMgmt = FaqCatMgmt::find($id);
        if ($faqCatMgmt->delete()) {
            return redirect("faqcats")->with('message', 'Writer Successfully Deleted ');
        } else {
            return redirect("faqcats/create ")->with('message', 'Failed to Deleted');
        }
    }
}
