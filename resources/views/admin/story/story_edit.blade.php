@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
  <h2>Create Story</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
<form action="{{url("stories/$edit_story->id/update")}}" method="POST">
  @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Story title</label>
        <input type="text" class="form-control"  value="{{$edit_story->title}}" name="title">
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Writer</label>
          <select class="form-control" name="writer" hidden>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
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
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{$edit_story->image}}">
            </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" name="short_description" rows="3">{{$edit_story->short_description}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
              <div class="form-group">
                 <textarea id="editor" class="form-control" name="description">{{$edit_story->description}}</textarea>
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
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
   
</div>
@endsection  