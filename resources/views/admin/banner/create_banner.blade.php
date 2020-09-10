@extends('layouts.admin_panel')
@section('title','create banner')
@section('content')
<div class="col-sm-6">
    <h2>Create Banner</h2>
    <form action="{{route('banners.store')}}" method="post" enctype="multipart/form-data">
      @csrf
        
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" value="{{old('title')}}" aria-describedby="nameHelp" placeholder="Enter Name">
          @error('title') <p style="color:red">{{$message}}</p> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>            
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status">
              <option selected>Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  