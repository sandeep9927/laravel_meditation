@extends('layouts.admin_panel')
@section('title','Department management')
@section('content')
<div>
  <h2>Department Management</h2>
  @if(Session::get('message'))
      <p class="alert alert-success">{{Session('message')}}</p>
    @endif
  <br>
    <form>
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
            <label for="">Status</label>
            <div class="col-auto my-1">
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Apply</button>
          </div>
          <div class="col-auto my-1">
            <a class="btn btn-primary" href="{{url('/department/create')}}">Create Department</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody><?php $count=1;?>
              @foreach($departments as $department)
              
              <tr>
                <th scope="row">{{$count++}}</th>
                <td>{{$department->title}}</td>
                <td>{{$department->status}}</td>
                <td>{{$department->updated_at}}</td>
                <td><a class="btn btn-primary" href="{{url("/department/$department->id/edit")}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{url("/department/$department->id/delete")}}">Delete</a></td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
          
          
      </form>
</div>

@endsection
