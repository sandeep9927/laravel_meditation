@extends('layout')
@section('title','profile')
@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<section style="padding: 94.5px 0;margin-bottom:100px;">
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            @if (Auth::user()->image)
                    <div>
                        <img  src="{{ url('/images/'.Auth::user()->image) }}" alt="" class="img-rounded img-responsive" />
                        
                    </div>
                    @else
                    <style>.avatar {vertical-align: middle;width: 80px;height: 90px; margin-left: 20px;margin-right: 30px;}</style>
                    <img src="{{ url('/images/avatar.png') }}" alt="Avatar" class="avatar" st>
                    @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Liked post:
                                    </h5>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Liked Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recent Activity</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="profile-edit-btn" name="btnAddMore" href="{{ url('/update-user-profile') }}">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>About </p>
                            <i class="fa fa-user"></i> {{ Auth::user()->name }}<br/>
                            <i class="glyphicon glyphicon-envelope"></i> {{ Auth::user()->email }}</a><br/>
                            {{ Auth::user()->dob }}
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <h6>
                                        <ul class="list-unstyled">
                                            @foreach ($favorite as $item)
                                            <li class="media">
                                                <img class="mr-3" style="width: 100px; height:60px;" src="{{ url('/images/'.$item->image) }}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                <a class="mt-0 mb-1" href="{{ url("technique/$item->id") }}">{{ $item->title }}</a><br>
                                                {{ $item->short_description }}
                                                
                                                </div>
                                            </li>
                                            @endforeach
                                            </ul>
                                    </h6>
    
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

</section>


@endsection