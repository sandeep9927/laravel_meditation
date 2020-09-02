@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Pannel Catgeory</h2>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{old('image')}}" >
            </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status">
              <option value="Active" {{ old('status') == "Apple" ? 'selected' : '' }}>Active</option>
              <option value="Inactive" {{ old('status') == "Apple" ? 'selected' : '' }}>Inactive</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  