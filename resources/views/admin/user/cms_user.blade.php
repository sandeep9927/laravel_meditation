@extends('layouts.admin_panel')
@section('title','cms user')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <th scope="col">Users Online</th>
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
                @if ($user->isOnline())
                   <td class="text-success"><i class="fa fa-circle"></i> online </td> 
                @else
                <td class="text-danger"><i class="fa fa-circle"></i> Offline</td> 
                @endif
                {{-- <td>{{ \Carbon\Carbon::parse($user->update_at)->diffForHumans() }}</td> --}}
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
               <td>
                <input type="checkbox" data-id="{{ $user->id }}" name="status" class="js-switch" {{ $user->user_status == 'active' ? 'checked' : '' }}>
                </td>
                <td>{{$user->role->role}}</td>
                <td>{{$user->created_at}}</td>
                <td><a class="btn btn-primary" href="{{url("/cms/$user->id/edit")}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{url("/user/$user->id/delete")}}">Delete</a></td>
              </tr> 
              @endforeach
            </tbody>
     </table>
</div>
<div class="col-sm-12">
  {{ $users->links() }}
</div>
@endsection

@section('footer-script')
<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

  elems.forEach(function(html) {
      let switchery = new Switchery(html,  { size: 'small' });
  });
  $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 'active' : 'inactive';
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ url('changeStatus') }}',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                
            }
        });
    });
});
  </script>
@endsection



