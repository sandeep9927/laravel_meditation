@extends('layouts.admin_panel')
@section('title','cms user')
@section('content')
<div >
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <h2>Cms User</h2>
    <form>
        <div class="form-row align-items-center">
            <label for="">Role</label>
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Role</label>
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
          
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Apply</button>
          </div>
          <div class="col-auto my-1">
            <a class="btn btn-primary" href="{{url("create_user")}}">Create User</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->id}}</td>
                <td>{{$user->id}}</td>
                <td>{{$user->created_at}}</td>
                <td>edit</td>
              </tr> 
              @endforeach
              
              
              
            </tbody>
          </table>
          
          
      </form>
</div>

@endsection
