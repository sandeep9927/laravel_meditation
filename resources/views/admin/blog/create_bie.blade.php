@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Blog,Interview And Event Manegement</h2>
    @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" name="title"  value="{{old('title')}}">
          @error('title')<p style="color: red">{{$message}}</p>@enderror
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlSelect1">Type</label>
          <select class="form-control" name="type">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          @error('type')<p style="color: red">{{$message}}</p>@enderror
        </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Select Technique </label>
          <select multiple class="form-control" name="technique">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          @error('technique')<p style="color: red">{{$message}}</p>@enderror
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
        <input type="file" class="form-control" name="image" value="{{old('image')}}" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Short Description</label>
            <textarea class="form-control" name="short_description" rows="3">{{old('short_description')}}</textarea>
              @error('short_description')<p style="color: red">{{$message}}</p>@enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
                  <div class="form-group">
                     <textarea id="editor" class="form-control" name="description">{{old('description')}}</textarea>
                     @error('description')<p style="color: red">{{$message}}</p>@enderror
                  </div>
            </div>
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>tinymce.init({selector: 'textarea#editor',menubar: false});</script>
        <label for="">Status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Active">
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Inactive">
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
          </div>@error('status')<p style="color: red">{{$message}}</p>@enderror
        </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
   
</div>
@endsection  




