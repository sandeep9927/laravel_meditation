@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <h2>Edit User</h2>
<form action="{{url("writer_mgmt/$writer_edit->id/update")}}" method="post" enctype="multipart/form-data">
  @csrf 
  
  <div class="form-group">
    <label for="">Name</label>
  <input type="text" class="form-control" name="username"  value="{{$writer_edit->name}}">
    
  </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$writer_edit->email}}">
            
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" value="{{$writer_edit->password}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password2" value="{{$writer_edit->password}}">
          </div>
          <label for="">Select Role</label><br>
          <div class="form-check form-check-inline">
            <input type="radio" id="teacher" value="1" name="role" required>
            <label class="form-check-label" for="inlineRadio1">Superuser</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" id="teacher" value="2" name="role" required>
            <label class="form-check-label" for="inlineRadio1">Blogger</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" id="teacher" value="3" name="role" required>
            <label class="form-check-label" for="inlineRadio1">Writer</label>
          </div><br>
          
          <label for="">Status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" value="active" required>
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" required value="inactive">
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
          </div><br>
          
          
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Notify User Of New Account</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Monile Number</label>
            <input type="text" class="form-control" name="number" value="{{$writer_edit->mobile}}">
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{$writer_edit->image}}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection