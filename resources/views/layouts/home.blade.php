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
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  @yield('css')
  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  @yield('js')

</head>
<body>
  <!-- Standard navigation -->
  <nav class="green lighten-2">

     <div class="nav-wrapper ">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
       <a href="#" class="brand-logo white-text">Studentenvoer</a>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="/">Overview</a></li>
         @if(!Auth::user())

           <li><a href="/login">Login</a></li>
           <li><a href="/register">Registreer</a></li>
         @elseif(Auth::user())
          <li><a href="/logout">Logout</a></li>

          <li><a href="">{{ Auth::user()->name }}</a></li>
         @endif
       </ul>
     </div>
   </nav>
   <!-- Mobile navigation side-nav -->
   @if(Auth::user())
     <ul id="slide-out" class="side-nav">
      <li><div class="userView">
        <div class="background">
          <img src="images/foodbackground.jpg">
        </div>
        <a href="#!user"><img class="circle" src="images/profile.jpg"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
        <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
      </div></li>
      {{-- <li><a href="#!"><i class="material-icons">cloud</i>My profile</a></li> --}}
      <li><a href="/">Overview</a></li>
      <li><a href="/logout">Logout</a></li>
{{--       <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> --}}
    </ul>
    @elseif(!Auth::user())
    <ul id="slide-out" class="side-nav">
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Registeer</a></li>
{{--       <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> --}}
    </ul>
     @endif

<!-- body -->
@yield('content')







<script>
// Initialize collapse button
$(document).ready(function(){
  $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }
    );
});
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
</script>
</body>
</html>
