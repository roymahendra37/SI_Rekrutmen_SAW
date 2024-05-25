<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rekrutmen | {{ $title }}</title>
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/plugins/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>
<style>
  body {
    background-color: white;
  }
  
  .hform{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 80px;
  }

  .hlogin {
    border: solid 0.5px;
    border-radius: 10px;
    width: 30%;
    padding: 20px;
  }

  .hlogin h2 {
    text-align: center;
  }
</style>
<body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Rekrutmen Karyawan</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="/sesi"><i class="fa fa-fw fa-user"></i> Login</a>
                    </li>
                    <li>
                        <a href="/sesi/register"><i class="fa fa-fw fa-user"></i> Register</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    
    <div class="hform">
      <div class="hlogin">
        <h2>Register</h2>
        <form action="/sesi/create" method="POST">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="name">Username</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Register</button>
          </form>
      </div>
    </div>
    <script src="{{ asset('style/js/jquery.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/morris/morris-data.js') }}"></script>
</body>
</html>