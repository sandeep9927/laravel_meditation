@extends('layouts.admin_panel')
@section('title','Technique Create')
@section('content')
<div class="col-sm-6">
  <h2>Create Technique Category</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{url("techniques/$edit_tec->id")}}" method="POST" enctype="multipart/form-data">
    @method('put')
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select Parent </label>
    <select class="form-control" name="parent">
      <option selected>Select Parenet Category</option>
    @foreach ($parent_cat_id as $parent)
     
      <option value="{{ $parent->id }}">{{ $parent->title }}</option>
    @endforeach
  </select>
  @error('parent')<p style="color: red">{{$message}}</p>@enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select Child </label>
    <select class="form-control" name="child">
      <option selected>Select Child Category</option>
    @foreach ($child_cat_id as $child)
     
      <option value="{{ $child->id }}">{{ $child->title }}</option>
    @endforeach
  </select>
  @error('child')<p style="color: red">{{$message}}</p>@enderror
  </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"> Title</label>
          <input type="text" class="form-control"  value="{{ $edit_tec->title }}" name="title">
          @error('title')<p style="color: red">{{$message}}</p>@enderror
        </div>
    
        
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
        <input type="file" class="form-control" name="image" value="{{old('image')}}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" name="short_description" rows="3">{{ $edit_tec->short_description }}</textarea>
            @error('short_description')<p style="color: red">{{$message}}</p>@enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
                <div class="form-group">
                   <textarea id="editor" class="form-control" name="description">{{ $edit_tec->description }}</textarea>
                   @error('description')<p style="color: red">{{$message}}</p>@enderror
                </div>
          </div>
          <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
          <script>tinymce.init({selector: 'textarea#editor',menubar: false});</script>
  
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Create FAQs</label>
          <input type="text" name="faqs" id="" class="form-control" value="{{ $edit_tec->faqs }}">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
   
</div>
@endsection  