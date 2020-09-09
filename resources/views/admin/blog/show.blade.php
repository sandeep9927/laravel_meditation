@extends('layout')
@section('title','Blog')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div id="content card">
					<div class="card-body">
						<img src="{{url('/images/' . $blog->image)}}" style="width: 100%;" alt="" class="image image-full">
						<div class="title">
							<h2>{{$blog->title}}</h2>
							<!-- <span class="byline">jhy yvi</span> -->
						</div>
						{!!$blog->description!!}
					</div>
				</div>
			</div>
			<div class="col-sm-4">
		      	<div class="row">
			          <div class="col-sm-12"><h3 style="margin-bottom: 3rem;">Suggested Blogs</h3></div>
			      </div>
			          @foreach($blogs_suggestion as $blog_suggestion)
			      <div class="well">
			        <a href=""><img src="{{url('images/' . $blog_suggestion->image)}}" class="img-responsive" style="width:50%" alt="Image"></a>
			        <p>{{$blog_suggestion->title}}</p>
		      	</div>
		        @endforeach
    		</div>
		</div>
	</div>
@endsection