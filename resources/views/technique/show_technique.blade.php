@extends('layout')
@section('title','technique')
@section('content')

<link rel="stylesheet" href="{{ asset('css/technique.css') }}">
<div class="jumbotron" style="background-image: url('/images/v.jpg')">
    <div class="container text-center">
      <h1>Meditation</h1>  
    </div>
</div>
<div class="container-fluid text-center" style="margin-bottom: 200px;">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    
    <div class="col-sm-8 text-left" > 
      <form action="{{ url('technique/'.$show_techniuqe->id) }}" method="POST">
        @csrf
        
        <div style="text-align: center" >
          <h1 >{{ $show_techniuqe->title }}</h1>
          <img style="width: 400px;"  src="{{ url('/images/'.$show_techniuqe->image) }}" alt="no-image.png">
          <p style="width: 400px;">{!!$show_techniuqe->description!!}</p>
          <div class="rating" style="float: right">
            <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $show_techniuqe->userAverageRating }}" data-size="xs">
            <input type="hidden" name="id" required="" value="{{ $show_techniuqe->id }}">
            <span  class="review-no">422 reviews</span><br/>
            <button class="btn btn-success">Submit Review</button>
          </form>
           </div> 
        </div>           
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $("#input-id").rating();

</script>
@endsection