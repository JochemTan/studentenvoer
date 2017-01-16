<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  {{-- Custom css --}}
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/app.css">
  @yield('css')
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <header class="main-header">
      <div class="logo-text">
        <h1>Studentenvoer</h1>
      </div>
      <nav class="nav">
        <a href="#">Recipe</a>
        <a href="#">Add recipe</a>
        <a href="{{ url('/logout') }}">Logout</a>
        <a href="#" class="nameuser">
        @if(Auth::user())
          {{ Auth::user()->name }}
        @else
        <a href="{{ url('/login') }}">Sign in</a>
        <a href="{{ url('/register') }}">Register</a>
        @endif

        </a>
      </nav>
      <div class="clearfix"></div>
    </header>

@yield('content')
</div>
</body>
{{-- javascript --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('js')
</html>
