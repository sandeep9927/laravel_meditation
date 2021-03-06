@extends('layouts.admin_panel')
@section('title','Story Create')
@section('content')
<div class="col-sm-6">
  <h2>Create Parent Category</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{url('parents')}}" method="POST">
  @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1"> Title</label>
          <input type="text" class="form-control"  placeholder="Title" name="title">
          @error('title')<p style="color: red">{{$message}}</p>@enderror
        </div>
    
        
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
        <input type="file" class="form-control" name="image" value="{{old('image')}}" >
            </div>
       
        <label for="">Status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Active">
            <label class="form-check-label" for="inlineRadio1">Active</label>
            
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Inactive">
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
            
          </div>@error('status')<p style="color: red">{{$message}}</p>@enderror<br>
          <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
   
</div>
@endsection  