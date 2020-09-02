@extends('layouts.admin_panel')
@section('title','Story Create')
@section('content')
<div class="col-sm-6">
  <h2>Create Story</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{url('stories')}}" method="POST">
  @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Story title</label>
          <input type="text" class="form-control"  placeholder="Title" name="title">
          @error('title')<p style="color: red">{{$message}}</p>@enderror
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Writer</label>
          <select class="form-control" name="writer">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          @error('writer')<p style="color: red">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Story Category/Department </label>
          <select multiple class="form-control" name="department">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          @error('department')<p style="color: red">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" name="short_description" rows="3"></textarea>
          @error('short_description')<p style="color: red">{{$message}}</p>@enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
              <div class="form-group">
                 <textarea id="editor" class="form-control" name="description"></textarea>
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
            
          </div>@error('status')<p style="color: red">{{$message}}</p>@enderror<br>
          <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
   
</div>
@endsection  