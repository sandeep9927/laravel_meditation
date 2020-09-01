@extends('layout')
@section('title','profile')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            @if (Session::get('message'))
<p class="alert alert-success">{{Session('message')}}</p>
  @endif
            <div class="well well-sm">
                <div class="row">
                    @if (Auth::user()->image)
                    <div class="col-sm-6 col-md-4">
                        <img src="../images/{{ Auth::user()->image }}" alt="" class="img-rounded img-responsive" />
                        
                    </div>
                    @else
                    <style>.avatar {vertical-align: middle;width: 80px;height: 90px; margin-left: 20px;margin-right: 30px;}</style>
                    <img src="../images/I80W1Q0.png" alt="Avatar" class="avatar" st>
                    @endif
                    
                    
                    <div class="col-sm-6 col-md-8">
                        
                        <h1>{{ Auth::user()->name }}</h1>
                 
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->email }}
                        </p>

                        <!-- Split button -->
                        <div class="btn-group">
                            <a class="btn btn-primary" href="user/profile/{{Auth::user()->id}}">Edit</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
