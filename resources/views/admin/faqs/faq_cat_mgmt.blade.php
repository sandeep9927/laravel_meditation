@extends('layouts.admin_panel')
@section('title','FAQ Category')
@section('content')
<div>
  <h2>FAQ Category Management</h2>
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <br>
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
            <a class="btn btn-primary" href="{{url('faqcats/create')}}">Create FAQ Category</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
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
              @foreach ($faq_cats as $faq_cat)
              <tr>
              <td>{{$count++}}</td>
              <td>{{$faq_cat->title}}</td>
              <td>{{$faq_cat->status}}</td>
              <td>{{$faq_cat->updated_at}}</td>
              <td><a class="btn btn-primary" href="{{url("faqcats/$faq_cat->id/edit")}}">Edit</a>
                </td>
              
              <td>
              <form action="{{url("faqcats/$faq_cat->id")}}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
</div>
<div class="col-sm-12">
  {{$faq_cats->links() }}
</div>
@endsection

