@extends('layouts.admin_panel')
@section('title','Technique management')
@section('content')
<div>
  <h2>Technique Management</h2>
  @if(Session::get('message'))
      <p class="alert alert-success">{{Session('message')}}</p>
    @endif
  <br>

        <div class="form-row align-items-center">
            <label for="">Search Title </label>
            <div>
            <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
             <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
          
          <div class="form-row align-items-center">
            
          
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Apply</button>
          </div>
          <div class="col-auto my-1">
            <a class="btn btn-primary" href="">Create Technique</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Parent Category</th>
                <th scope="col">Title</th>
                <th scope="col">Child Category</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody><?php $count=1;?>
              
              <tr>
                <th scope="row">{{$count++}}</th>
                <td>PC</td>
                <td><a href=""> Title</td>
                <td>CC</td>
                <td>Inactive</td>
                <td>DD</td>
                <td><a class="btn btn-primary" href="">Edit</a></td>
                <td><a class="btn btn-danger" href="">Delete</a></td>
              </tr>
              
            </tbody>
          </table>
          
          

</div>

@endsection
