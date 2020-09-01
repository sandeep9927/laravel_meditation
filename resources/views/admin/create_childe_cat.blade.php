@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Childe Catgeory</h2>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Parent Category</label>
            <select class="custom-select">
                <option selected>Active</option>
                <option value="1">One</option>
              </select>
              </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th class="col-xs-6"><input type="text" class="form-control"></th>
                    <th><button type="submit" class="btn btn-primary">Remove</button></th>
                    
                  </tr>
                </thead>
                
            
              </table>
              
              
            <button type="submit" class="btn btn-primary">Add Another item</button>
            
            
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