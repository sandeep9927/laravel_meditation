<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Admin Login</title>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    
<form action="{{url('admin/dashboard')}}" method="post">

    @csrf
    <div id="login">
        <div class="container">
            @if (Session::get('message'))
<p class="alert alert-danger">{{Session('message')}}</p>
  @endif
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Enter Email:</label><br>
                                <input type="email" name="email" id="username" value="{{old('email')}}" class="form-control">
                                @error('email')<p style="color: red">{{$message}}</p>@enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')<p style="color: red">{{$message}}</p>@enderror
                            </div>
                            <ul>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <a class="btn btn-info btn-md" href="{{ url('/') }}">Home</a>
                            </ul>
                        
                            <div id="register-link" class="text-right">
                                <a href="{{ url('/password/reset') }}" class="text-info">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>