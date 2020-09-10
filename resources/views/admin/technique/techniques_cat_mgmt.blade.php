@extends('layouts.admin_panel')
@section('title','Techniques')
@section('content')
<div>
  <h2>Techniques Category Management</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <br>
<div class="form-row align-items-center">
            <label for="">Search Title</label>
           <div class="col-xs-6">
            <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
             <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> 
      <div class="form-row align-items-center">
        <label for="">Parent Category</label>
        <div class="col-auto my-1">
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="form-row align-items-center">
        <label for="">Status</label>
        <div class="col-auto my-1">
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </form>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Apply</button>
      <a class="btn btn-primary" href="{{ url('techniques/create') }}">Create</a>
    </div>
  </div>
    
    </div>
   
</div>       
          <br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Parent Category</th>
                <th scope="col">Child Category</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($techniques as $technique)
              <tr>
                <td>{{ $technique->id }}</td>
                <td>{{ $technique->parentCategory->title }}</td>
                <td>{{ $technique->childCategory->title }}</td>
                <td>{{ $technique->title }}</td>
                <td>{{ $technique->parentCategory->status }}</td>
                <td>{{ $technique->updated_at }}</td>
                <td><a class="btn btn-primary" href="{{ url("techniques/$technique->id/edit") }}">Edit</a></td>
                <td><form action="{{url("techniques/$technique->id")}}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>   

</div>

@endsection
