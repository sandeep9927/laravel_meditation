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
        @if ($techniques->count())
  
        <div class="panel-heading">Tradition</div>
        @foreach ($techniques as $technique)
        <ul >
          <li> <a href="{{ url("technique/$technique->id") }}"><img style="width: 100px;" src="{{ url('/images/'.$technique->image) }}" alt="">  {{ $technique->title }}</li></a>
        </ul>
        @endforeach
          
        @endif
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
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
</div><br><br>

@endsection