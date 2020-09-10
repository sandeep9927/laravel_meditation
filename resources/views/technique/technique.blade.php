@extends('layout')
@section('title','techniques')
@section('content')



<link rel="stylesheet" href="{{ asset('css/ul.css') }}">
<div class="jumbotron" style="background-image: url('/images/v.jpg')">
 
  <div class="container text-center">
    <h1>Meditation</h1>      
   
  </div>
</div>
<h4 style="text-align: center">Select Techniques By Tradition or By Need or By Level</h4><hr>
<div class="container">    
  <div class="row">
    <div class="col-sm-4" >
      <div class="panel panel-primary" id="nav">
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
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>
@endsection