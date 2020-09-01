<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/footer.css">
    <!-- JQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
    <div>
        <!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark default-color cyan darken-3">
      {{-- <a class="navbar-brand" href="#"><strong>Navbar</strong></a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
            
            <a class="nav-item nav-link" href="{{url('post/create')}}">Create Post</a>
            {{-- <a class="nav-item nav-link disabled" href="{{url('login')}}">Login</a>
            <a class="nav-item nav-link disabled" href="{{url('users/create')}}">SingUp</a> --}}
            @if (Route::has('login'))
            
                @auth
                    <a class="nav-item nav-link" href="{{ url('/home') }}">|{{ Auth::user()->name}}</a>
                    <a class="nav-item nav-link" href="{{url('profile')}}">Profile</a>
                      <a class="nav-item nav-link" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  
                @else
                    <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            
        @endif
            
          </div>
 
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  
  </header>
  <!--Main Navigation-->
</div>
    @yield('content')
<div class="footer">
        <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">
  
      <!-- Grid row-->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="nav-item nav-link" href="{{url('contact')}}">Contact Us</a>
            <a class="nav-item nav-link" href="/about">About Us</a>
            <a class="nav-item nav-link" href="/working">How It Works</a>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      {{-- <a href="https://mdbootstrap.com/"> MDBootstrap.com</a> --}}
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
