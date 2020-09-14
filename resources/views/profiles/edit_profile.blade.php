@extends('layout')
@section('title','edit')
@section('content')
<section style="padding: 94.5px 0;">
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<div style="width: 50%; margin-left:25%;">
<form action="{{url("profile/$user->id/update")}}" method="POST" enctype="multipart/form-data" >

  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Upload Image</label>
      <img style="width: 100px" src="{{url('/images/' . $user->image)}}" alt="">
      <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" value="{{$user->name }}">
      @error('name')<p style="color: red">{{$message}}</p>@enderror
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id=""  name="email" value="{{ $user->email }}">
      @error('email')<p style="color: red">{{$message}}</p>@enderror
    </div>
          
    <div class="form-group">
      <label for="exampleInputPassword1">Birthday</label>
      <input type="date" class="form-control" name="dob" value="">
      @error('dob')<p style="color: red">{{$message}}</p>@enderror
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" value="{{ $user->password }}" name="password" >
    </div>
        
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</section>
@endsection