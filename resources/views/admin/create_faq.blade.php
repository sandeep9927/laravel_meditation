@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Faq</h2>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
                <div class="form-group">
                   <textarea id="editor" class="form-control"></textarea>
                </div>
          </div>
          <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
          <script>tinymce.init({selector: 'textarea#editor',menubar: false});</script>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
             
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="custom-select">
              <option selected>Active</option>
              <option value="1">One</option>
            </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href=""  name="cancel" class="btn btn-primary">Cancel</a>
      </form>
</div>
@endsection  