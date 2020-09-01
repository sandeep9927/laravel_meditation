@extends('layouts.admin_panel')
@section('title','cms user')
@section('content')
<div>
  
  <h2>Site User</h2>
  @if (Session::get('message'))
  <p class="alert alert-success">{{Session('message')}}</p>
    @endif
        <div class="form-row align-items-center">
            <label for="">Email</label>
            <div class="col-sm-3 my-1">
                <label class="sr-only" for="inlineFormInputName">Name</label>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Email">
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
                <th scope="col">Suscriber</th>
                <th scope="col">Schedul Tecnique</th>
                <th scope="col">Schedul Seminar</th>
                <th scope="col">Schedul Event</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Edit | Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_status}}</td>
                <td>{{$user->role_id}}</td>
                <td>yes</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>{{$user->created_at}}</td>

                <td><a class="btn btn-primary" href="{{url("site_user/$user->id/edit")}}">Edit</a> |
                <a class="btn btn-danger" href="{{url("site_user/$user->id/delete")}}">Delete</a></td>
              </tr> 
              @endforeach
            
              
            </tbody>
          </table>
 
</div>

@endsection
