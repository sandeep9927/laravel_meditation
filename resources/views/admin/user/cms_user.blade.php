@extends('layouts.admin_panel')
@section('title','cms user')
@section('content')
{{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<div >
  @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
  <h2>Cms User</h2>
   
        <div class="form-row align-items-center">
            <label for="">Role</label>
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Role</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Active</option>
              <option value="1">Inactive</option>
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
            <a class="btn btn-primary" href="{{url("users/create")}}">Create User</a>
          </div>
        </div>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>@php
              $count = 1+(request()->get('page',1)-1)*10; 
           @endphp
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{$count++}}</th>
                
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                  data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
               </td>
                {{-- <td>{{$user->user_status}}</td> --}}
                <td>{{$user->role->role}}</td>
                <td>{{$user->created_at}}</td>
                <td><a class="btn btn-primary" href="{{url("/update-user-profile")}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{url("/user/$user->id/delete")}}">Delete</a></td>
              </tr> 
              @endforeach
            </tbody>
     </table>
</div>

<script>
  $('.toggle-class').on('change',function(){
    var status = $(this).prop('chacked')==true ? 1 : 0;
    var user_id = $(this).data('id');
    console.log('=============');
    alert("Are you sure ");
    $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ url('changeStatus') }}',
            data: {'status': status, 'user_id': user_id},
            
            success: function(data){
              console.log(data.success);
              console.log('=============');
            }
        });
      alert(user_id);
  })
</script>

<div class="col-sm-12">
  {{ $users->links() }}
</div>
@endsection



