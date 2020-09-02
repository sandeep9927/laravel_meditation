@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
<form action="{{url('faqcats')}}" method="POST">
  @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status">
              <option selected>Active</option>
              <option value="1">One</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  