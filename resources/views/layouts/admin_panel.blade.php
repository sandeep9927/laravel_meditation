<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>


  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/> --}}
  {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/> --}}
  <link href="{{ asset('https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css') }}" rel="stylesheet"/>

  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js') }}"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('pluging/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <a class="nav-item nav-link" href="{{ url('/') }}">Home</a>
      <a class="nav-item nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      <!-- Notifications Dropdown Menu -->
     
    </ul>
    
  </nav>
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ '/images/'.Auth::user()->image }}" class="img-circle elevation-2" alt="no">
        </div>
        @if ('isWriter')
        <div class="info">
          <a href="{{url('update-profile')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        @elseif('isUser')
        <div class="info">
          <a href="{{url('update-user-profile')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
        @endif
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- Example single danger button -->

          <li class="nav-item has-treeview menu-open">
              @cannot('isWriter')
              <li class="nav-item">
                <a href="{{url('cms_user')}}" class="{{Request::is('cms_user') ? 'nav-link active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Management</p>
                  </a>
                </li>
              @endcannot
              <li class="nav-item">
                <a href="{{url('writers')}}" class="{{Request::is('writers') ? 'nav-link active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Writer Management</p>
                </a>
              </li> 
              @cannot('isWriter')
              <li class="nav-item">
                <a href="{{url('faqs')}}" class="{{Request::is('faqs') ? 'nav-link active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>FAQ Management</p>
                  </a>
                </li>
              @endcannot            
              <li class="nav-item">
              <a href="{{url('banners')}}" class="{{Request::is('banners') ? 'nav-link active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner Management</p>
                </a>
              </li>
            
          </li>
          <li class="nav-item">
            <a href="{{url('blogs')}}" class="{{Request::is('blogs') ? 'nav-link active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Blog,Interview
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('stories')}}" class="{{Request::is('stories') ? 'nav-link active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Story Management
              
              </p>
            </a>
          </li>
          @cannot('isWriter')
          <li class="nav-item">
            <a href="{{url('/department')}}" class="{{Request::is('department') ? 'nav-link active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Department Management
                
              </p>
            </a>
          </li>
          @endcannot
          @cannot('isWriter')
          <li class="nav-item">
            <a href="{{url('techniques')}}" class="{{Request::is('techniques') ? 'nav-link active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Technique Management
              </p>
            </a>
          </li>
          @endcannot
          @cannot('isWriter')
          <li class="nav-item">
            <a href="{{url('faqcats')}}" class="{{Request::is('faqcats') ? 'nav-link active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Faq Category <br> Management
                
              </p>
              @endcannot
            </a> 
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="col-sm-12">
      @yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('footer-script')
</body>

</html>
