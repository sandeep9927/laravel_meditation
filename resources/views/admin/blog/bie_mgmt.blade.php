@extends('layouts.admin_panel')
@section('title','Blogs')
@section('content')
<div>
  <h2>Blog, Interview and Event Management</h2>
  <br>
@if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
        <div class="form-row align-items-center">
            <label for="">Search Title</label>
           <div>
            <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
             <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Apply</button>
          </div> 
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
            <a class="btn btn-primary" href="{{ url('blogs/create') }}">Create</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Type</th>
                <th scope="col">Writer</th>
                <th scope="col">Status</th>
                <th scope="col">Updated On</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @php
                 $count = 1+(request()->get('page',1)-1)*10; 
              @endphp
              @foreach ($blogs as $blog)
              <tr>
                
              <td>{{$count++}}</td>
              <td><a href="{{url('blogs/'. $blog->id)}}">{{$blog->title}}</a></td>
              <td><img style="width:100px" src="{{url('/images/'.$blog->image)}}" alt="no-image.png"></td>
              <td>{{$blog->type}}</td>
              <td>{{$blog->writer->name}}</td>
              <td>{{$blog->status}}</td>
              <td>{{$blog->updated_at}}</td>
              @if(Auth::check() && Auth::user()->id==$blog->writer_id)
              <td><a class="btn btn-primary" href="{{url("blogs/$blog->id/edit")}}">Edit</a></td>
              <td>
                <form action="{{url("blogs/$blog->id")}}" method="post">
                  @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endif
              </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
</div>
<div class="col-sm-12">
  {{$blogs->links()}}
</div>
@endsection

