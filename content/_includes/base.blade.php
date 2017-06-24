<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="@yield('pageDescription')">
  <meta name="author" content="ITSUPPORT-05">
  <title>{{$sitename}} @yield('pageTitle')</title>

  <!-- Bootstrap -->
  <link href="http://bootswatch.com/yeti/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="@url('assets/css/all.css')">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{$sitename}}</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="@url('/')">Home</a></li>
        <li><a href="@url('blog')">Blog</a></li>
        <li><a href="@url('about')">About</a></li>
        <li><a href="@url('contact')">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-8">
      @yield('body')
    </div>
    <div class="col-md-4 col-sm-4">
      @include('_includes.sidebar')
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>