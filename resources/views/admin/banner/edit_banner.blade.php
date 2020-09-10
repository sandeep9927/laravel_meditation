@extends('layouts.admin_panel')
@section('title','create banner')
@section('content')
<div class="col-sm-6">
    <h2>Create Banner</h2>
    <form action="{{url("banners/$banner->id")}}" method="post" enctype="multipart/form-data">
      @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{$banner->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{$banner->image}}">
            <img style="width: 100px" src="{{url('images/' . $banner->image)}}" alt="">
            </div>            
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status" value="{{$banner->status}}">
              <option selected>Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  