<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {   
        $departments = Department::all();
        return view('admin.department_mgmt',compact('departments'));
    }


    public function create()
    {
        return view('admin.create_department');
    }

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

    public function edit($id)
    {
        $departments = Department::find($id);
        return view('admin.edit_department', compact('departments'));
    }


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

    public function destroy($id)
    {
        $delete_department = Department::find($id);
        $delete_department->delete();
        return redirect('/department')->with('message','Department successfully deleted');

    }
}
