@extends('layout')
@section('title','Learn')
@section('content')

<div class="container text-center">    
  <div class="row" >
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-12"><h3 style="margin-bottom: 3rem;">LEARN</h3></div>
          @foreach($blogs as $blog)
          <div class="col-sm-6">
            <a href="{{url('blogs/'. $blog->id)}}"><img src="{{url('images/' . $blog->image)}}" class="img-responsive" style="width:100%" alt="Image"></a>
            <p>{{$blog->title}}</p>
          </div>
          @endforeach
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="row">
          <div class="col-sm-12"><h3 style="margin-bottom: 3rem;">Suggested Blogs</h3></div>
      </div>
          @foreach($blogs_suggestion as $blog_suggestion)
      <div class="well">
        <a href="{{url('blogs/'. $blog_suggestion->id)}}"><img src="{{url('images/' . $blog_suggestion->image)}}" class="img-responsive" style="width:50%;" alt="Image"></a>
        <p style="text-align: left;">{{$blog_suggestion->title}}</p>
      </div>
        @endforeach
    </div>
    
    <div class="col-sm-12">
      {{$blogs->links()}}
    </div>
  </div>
</div>

@endsection