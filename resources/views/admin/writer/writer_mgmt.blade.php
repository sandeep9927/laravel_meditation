@extends('layouts.admin_panel')
@section('title','Writers')
@section('content')
<div>
  <h2>Writer Management</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <br>
   
        <div class="form-row align-items-center">
            <label for="">Search Title</label>
           <div>
            <form class="form-inline ml-3" action="{{ url('/search') }}" method="get">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
             <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
      <div class="form-row align-items-center" style="margin-left: 8px;" >
        <label for="">Status</label>
        <div class="col-auto my-1">
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="status">
            <option value="">Select status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>  
          </select>
        </div>
      
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">Apply</button>
      </div>
    </div>
    </form>
    </div>
          
          <div class="form-row align-items-center" style="margin-left: 8px;" >
           
          <div class="col-auto my-1">
          <a class="btn btn-primary" href="{{url('users/create')}}">Create Writer</a>
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
              @php
                  $count = 1+(request()->get('page',1)-1)*10; 
              @endphp
              @foreach ($writers as $writer)
              <tr>
              <td>{{$count++}}</td>
              <td>{{$writer->name}}</td>
              <td>{{$writer->email}}</td>
              <td>{{$writer->mobile}}</td>
              <td>{{$writer->user_status}}</td>
              <td>{{$writer->updated_at}}</td>
              {{-- @if (Auth::check() && Auth::user()->id==$writer->id) --}}
              @can('isAdmin')
              <td><a class="btn btn-secondary" href="{{url("update-profile")}}">Edit</a> |
                <a class="btn btn-danger" href="{{url("writers/$writer->id/delete")}}">Delete</a></td>
                @endcan
              
                
              </tr>
              @endforeach
              
            </tbody>
          </table>
          

</div>
<div class="col-sm-12">
  {{$writers->links()}}
</div
@endsection

