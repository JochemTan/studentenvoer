{{-- @extends('layouts.login') --}}

{{-- @section('content') --}}
  {{-- <div class="content">
  <h2 class="logo">Studentenvoer</h2>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-md-6">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">


          </div>
      </div> --}}

      {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

          <div class="col-md-6">
            @if ($errors->has('password'))
                <span class="help-block custom-help">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
              <input id="password" type="password" class="form-control" name="password" placeholder="password">


          </div>
      </div> --}}

      {{-- <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">

                      <input type="checkbox" name="remember" id="remember">
                      <label for="remember" class="check-box"></label>Remember Me
              </div>
          </div>
      </div> --}}

    {{--   <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary standard-button">
                  <i class="fa fa-btn fa-sign-in"></i> Login
              </button>
              <div class="i-forgot">
                <a class="btn btn-link"  href="{{ url('/password/reset') }}">Wachtwoord vergeten?</a><br>
                <a class="btn btn-link bitTop"  href="{{ url('/register') }}">Nog geen account</a>
              </div>
          </div>
      </div>
  </form>
</div> --}}
{{-- @endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Studentenvoer</title>
  <!-- ICONS -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


</head>
<body>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col s12 push-m4 m4">
      <div class="card-panel">
        <h5 style="text-align:center">Login</h5>
        <br>
        <form action="{{ url('/login') }}" method="post">
         {{ csrf_field() }}
         @if (count($errors) > 0)
            <ul style="margin-bottom:20px;">
                @foreach ($errors->all() as $error)
                    <li class="red-text">{{ $error }}</li>
                @endforeach
            </ul>
          @endif
          <div class="row">
            <div class="input-field">
            <input placeholder="Email" id="email" name="email" type="email" value="{{ old('email') }}" class="validate">
            <label for="email"
            >Email</label>
          </div>
          </div>
          <div class="row">
            <div class="input-field">
            <input placeholder="Wachtwoord" id="wachtwoord" name="password" type="password" class="validate">
            <label for="wachtwoord">Wachtwoord</label>
          </div>
          </div>
          <div class="row">
            <button type="submit" class="waves-effect green lighten-2 btn">Inloggen</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

