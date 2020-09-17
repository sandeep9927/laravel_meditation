@extends('layouts.admin_panel')
@section('title','Banner')
@section('content')
<div>
  <h2>Banner Management</h2>
  @if(Session::get('message'))
      <p class="alert alert-success">{{Session('message')}}</p>
    @endif
  <br>
    <form>
        <div class="form-row align-items-center">
            <label for="">Search Title</label>
           <div>
            <form class="form-inline ml-3" action="{{url('banners/search')}}" method="get">
            <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
             <button class="btn btn-primary" type="submit">
               Search          
             </button>
        </div>
      </div>
    </form>
    </div>
            
      <div class="col-auto my-1">
        <a class="btn btn-primary" href="{{url('/banners/create')}}">Create Banner</a>
      </div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Title</th>
            <th scope="col">Banner Image</th>
            <th scope="col">Status</th>
            <th scope="col">Updated On</th>
            <th scope="col">Edit</th>
            
          </tr>
        </thead>
        <tbody><?php $count=1?>
        @foreach($banners as $banner)
          <tr>
            <th scope="row">{{$count++}}</th>
            <td>{{$banner->title}}</td>
            <td><img style="width: 100px" src="{{url('images/' . $banner->image)}}" alt=""></td>
            <td>{{$banner->status}}</td>
            <td>{{$banner->updated_at}}</td>
            <td><a class="btn btn-primary" href="{{url("/banners/$banner->id/edit")}}">Edit</a></td>
            
          </tr>
        @endforeach
          
        </tbody>
      </table>   
    </form>
</div>

@endsection
