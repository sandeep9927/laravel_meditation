@extends('layout')
@section('title','Technique')
@section('content')

<head>
 @toastr_css
</head>
@jquery
@toastr_js
@toastr_render
  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
  <!-- Page Content -->
  <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $show_techniuqe->title }}</h1>

        <!-- Author -->
        {{-- <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p> --}}

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $show_techniuqe->created_at }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ url('/images/'.$show_techniuqe->image) }}" alt="no-image.png">

        <hr>

        <!-- Post Content -->
        <p class="lead">{!!$show_techniuqe->description!!}</p>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        <div style="float: right;"><input data-id="{{$show_techniuqe->id}}" class="toggle-class" type="checkbox" data-onstyle="danger" data-offstyle="white" data-toggle="toggle"  data-on="<i class='fa fa-heart'></i>" data-off="<i class='fa fa-heart'></i>" {{ $show_techniuqe->favorite ? 'checked' : '' }}></div>
        <hr>
        
        <form action="{{ url('technique/'.$show_techniuqe->id) }}" method="POST">
          @csrf
          <div class="rating">
          <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $show_techniuqe->userAverageRating }}" data-size="xs">
          <input type="hidden" name="id" required="" value="{{ $show_techniuqe->id }}">
          <button class="btn btn-success">Submit Review</button>
          <script type="text/javascript">$("#input-id").rating();</script>
          </div>
        </form>
         <!-- set color and hide if not favourited -->
         <script>
          $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 'yes' : 'no'; 
                var user_id = $(this).data('id'); 
                 console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ url('favoritePost') }}',
                    data: {'status': status, 'user_id': user_id},
                    success: function(data){
                      console.log('cool');
                    }
                });
            })
          })
        </script>
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:({{ $show_techniuqe->comments()->count()}})</h5>
          <div class="card-body">
            <form action="{{ route('comment.store',$show_techniuqe->id) }}" method="POST">
              @csrf
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
           
            {{-- <h5 class="mt-0">Commenter Name</h5> --}}
            @foreach ($show_techniuqe->comments as $comment)
            <h5 class="mt-0"><strong>{{$comment->user->name}}</strong></h5>
                <p>{{ $comment->comment }}</p>
            @endforeach
            
          </div>
        </div>
        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        {{-- <form action="{{ url('search') }}" method="get">
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </form> --}}
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Recommended</h5>
          <div class="card-body">
            <div class="row">
             
                <ul class="list-unstyled mb-0">
                  @foreach ($recommended_techniques as $item)
                  <li>
                    <a href="{{ url("technique/$item->id") }}">{{ $item->title }}</a>
                  </li>
                  @endforeach
                  
                </ul>
              
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection