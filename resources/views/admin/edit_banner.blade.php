@extends('layouts.admin_panel')
@section('title','create banner')
@section('content')
<div class="col-sm-6">
    <h2>Create Banner</h2>
    <form action="{{url("banners/$banners->id")}}" method="post" enctype="multipart/form-data">
      @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{$banners->title}}">
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputEmail1">Select Page</label>
            <select class="custom-select">
                
                <option value="1">One</option>
                <option value="1">Two</option>
              </select>
              </div> -->
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="" >
            </div>            
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status" value="{{$banners->status}}">
              <option selected>Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  