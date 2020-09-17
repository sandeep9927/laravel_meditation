@extends('layout')
@section('title','techniques')
@section('content')



<link rel="stylesheet" href="{{ asset('css/ul.css') }}">
<div class="" >
<img src="{{ url('/images/v.jpg') }}" alt="" style="background-repeat: no-repeat;
width:100%;height:250px;">
</div>
<h4 style="text-align: center">Select Techniques By Tradition or By Need or By Level</h4><hr>
<div class="container">    
  <div class="row">
    <div class="col-sm-4" style="height:500px" >
      <div class="panel panel-primary" id="nav" style="height:500px">
        <div class="panel-heading">Tradition</div>
        <div class="container">
          <div id="blog" class="row"> 
                 @if ($techniques->count())
                 @foreach ($techniques as $technique)
                 <div class="col-md-10 blogShort">
                     {{-- <h1>{{ $technique->title }}</h1> --}}
                     <img style="width: 100px; height:70px;" src="{{ url('/images/'.$technique->image) }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
                        <a href="{{ url("technique/$technique->id") }}" target="_blank"><strong>{{ $technique->title }} </strong></a>
                     <div class="text"><p style="width: 500px;" >
                         {!!$technique->description!!}
                     </p></div>
                     
                 </div>
                 @endforeach
                 @endif
             </div>
       </div>
      </div>
    </div>
    <div class="col-sm-4" >
      <div class="panel panel-primary" id="nav" style="height:500px">
        <div class="panel-heading">Your Level</div>
        <div class="container">
          <div id="blog" class="row"> 
                 @if ($techniques->count())
                 @foreach ($your_level as $technique)
                 <div class="col-md-10 blogShort">
                     {{-- <h1>{{ $technique->title }}</h1> --}}
                     <img style="width: 100px; height:70px;" src="{{ url('/images/'.$technique->image) }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
                        <a href="{{ url("technique/$technique->id") }}" target="_blank"><strong>{{ $technique->title }} </strong></a>
                     <div class="text"><p style="width: 500px;" >
                         {!!$technique->description!!}
                     </p></div>
                     
                 </div>
                 @endforeach
                 @endif
             </div>
       </div>
      </div>
    </div>
    <div class="col-sm-4" >
      <div class="panel panel-primary" id="nav" style="height:500px">
        <div class="panel-heading">Your Needs</div>
        <div class="container">
          <div id="blog" class="row"> 
                 @if ($techniques->count())
                 @foreach ($your_need as $technique)
                 <div class="col-md-10 blogShort">
                     {{-- <h1>{{ $technique->title }}</h1> --}}
                     <img style="width: 100px; height:70px;" src="{{ url('/images/'.$technique->image) }}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     
                        <a href="{{ url("technique/$technique->id") }}" target="_blank"><strong>{{ $technique->title }} </strong></a>
                     <div class="text"><p style="width: 500px;" >
                         {!!$technique->description!!}
                     </p></div>
                     
                 </div>
                 @endforeach
                 @endif
             </div>
       </div>
      </div>
    </div>

  </div>
</div>

<br>
@endsection