<?php

namespace App\Http\Controllers;

use App\Department;
use DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $departments = Department::paginate(10);
        return view('admin.department.department_mgmt',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create_department');
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
            'title' => 'required|max:200',
            'status' => 'required',
        ]);

        $department = new Department();
        $department->title = request('title');
        $department->status = request('status');

        $department->save();

        return redirect('/department');

    }
    
    public function show(Department $department)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::find($id);
        return view('admin.department.edit_department', compact('departments'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'status' => 'required',
        ]);

        $departments = Department::find($id);
        $departments->title = $request->input('title');
        $departments->status = $request->input('status');
        $departments->save();
        return redirect('/department')->with('message','Department successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_department = Department::find($id);
        $delete_department->delete();
        return redirect('/department')->with('message','Department successfully deleted');

    }

    public function search(Request $request)
    {
        $search = $request->search;
        $status = $request->status;
        $where = [
            [
                'name',
                '=',
                $search,
            ],
            [
                'status',
                '=',
                $status,
            ]
        ];
        $departments = DB::table('departments')->where($where);
        return view('admin.department.department_mgmt',compact('departments'));
    }
}
