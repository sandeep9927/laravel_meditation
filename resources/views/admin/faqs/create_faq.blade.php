@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Faq</h2>
    @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
    @endif
<form action="{{route('faqs.create')}}" method="post">
  @csrf
        <div class="form-group">
          <label for="">Title</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Name">
          @error('name')<p style="color:red">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
                <div class="form-group">
                <textarea id="editor" class="form-control" name="description">{{old('description')}}</textarea>
                   @error('description')<p style="color:red">{{$message}}</p>@enderror
                </div>
          </div>
          <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
          <script>tinymce.init({selector: 'textarea#editor',menubar: false});</script>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select class="form-control" name="cat">
              <option>1</option>
              <option>2</option>
             
            </select>
            @error('cat')<p style="color:red">{{$message}}</p>@enderror
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select" name="status">
              <option  value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            @error('Status')<p style="color:red">{{$message}}</p>@enderror
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  