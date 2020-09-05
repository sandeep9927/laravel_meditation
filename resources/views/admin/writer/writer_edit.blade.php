@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <h2>Edit User</h2>
<form action="{{url("writers/$writer_edit->id/update")}}" method="post" enctype="multipart/form-data">
  @csrf 
  
  <div class="form-group">
    <label for="">Name</label>
  <input type="text" class="form-control" name="username"  value="{{$writer_edit->name}}">
  @error('username')<p style="color: red">{{$message}}</p>@enderror
    
  </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" value="{{$writer_edit->email}}">
            @error('email')<p style="color: red">{{$message}}</p>@enderror
            
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" value="{{$writer_edit->password}}">
          @error('password')<p style="color: red">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{$writer_edit->password}}">
            @error('password_confirmation')<p style="color: red">{{$message}}</p>@enderror
          </div>  
          <label for="">Status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" value="active" required>
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" required value="inactive">
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
          </div>@error('status')<p style="color: red">{{$message}}</p>@enderror<br>
          
          
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Notify User Of New Account</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Monile Number</label>
            <input type="text" class="form-control" name="number" value="{{$writer_edit->mobile}}">
            @error('number')<p style="color: red">{{$message}}</p>@enderror
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{$writer_edit->image}}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection