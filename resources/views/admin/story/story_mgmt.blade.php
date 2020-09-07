@extends('layouts.admin_panel')
@section('title','Stories')
@section('content')
<div>
  <h2>Story Management</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
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
          <a class="btn btn-primary" href="{{url('stories/create')}}">Create Story</a>
           
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Writer Name</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($stories as $story)
                  <tr>
                    <td>{{$story->id}}</td>
                    <td>{{$story->title}}</td>
                    <td>{{$story->writer_id}}</td>
                    <td>{{$story->dep_id}}</td>
                    <td>{{$story->status}}</td>
                    <td>{{$story->updated_at}}</td>
                    
                    @can('isWriter')
                    @if ($story->writer_id == Auth::user()->id)
                    <td><a class="btn btn-primary" href="{{url("stories/$story->id/edit")}}">Edit</a></td>
                    <td><form action="{{ url("stories/$story->id") }}" method="post">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form></td>  
                    @endif
                    
                    @endcan
                  
                    
                    
                  </tr>
                  
              @endforeach
              
            </tbody>
          </table>
          
          
      </form>
</div>
<div class="col-sm-12">
  {{$stories->links()}}
</div>
@endsection
