@extends('layouts.admin_panel')
@section('title','create user')
@section('content')
<div class="col-sm-6">
    <h2>Create Writer</h2>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mobile</label>
          <input type="text" class="form-control" name="password1" placeholder="Mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" >
            </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password1" placeholder="Confurm Password">
          </div>
          <label for="">Status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Active</label>
          </div><br>
 
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection