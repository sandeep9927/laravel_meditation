@extends('layout')
@section('title','edit')
@section('content')
    
<div class="col-sm-6">
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{url("profile/update/$user->id")}}" method="POST" enctype="multipart/form-data">

  @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name }}" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id=""  name="email" aria-describedby="emailHelp" value="{{ $user->email }}">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Birthday</label>
          <input type="date" class="form-control" name="dob" value="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" value="{{ $user->password }}" name="password" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


@endsection