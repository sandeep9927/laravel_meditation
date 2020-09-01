@extends('layouts.admin_panel')
@section('title','cms user')
@section('content')
<div>
  <h2>Writer Management</h2>
  <br>
    <form>
        <div class="form-row align-items-center">
            <label for="">Search Title</label>
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
            <button type="submit" class="btn btn-primary">Create Writer</button>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">First Name</th>
                
                <th scope="col">Email ID</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($writers as $writer)
              <tr>
              <td>{{$writer->id}}</td>
              <td>{{$writer->name}}</td>
              <td>{{$writer->email}}</td>
              <td>{{$writer->mobile}}</td>
              <td>{{$writer->user_status}}</td>
              <td>{{$writer->updated_at}}</td>
              <td><a class="btn btn-secondary" href="{{url("writer_mgmt/$writer->id/edit")}}">Edit</a> |
              <a class="btn btn-danger" href="{{url("writer_mgmt/$writer->id/delete")}}">Delete</a></td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          
          
      </form>
</div>

@endsection
