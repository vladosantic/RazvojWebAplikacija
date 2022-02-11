<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/projekt.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Online ljekarna Sanitas</title>
    <script src="js/skripta.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/santass.jpg') }}">
    <style>
        body{background-image:url('assets/pozadina.jpg');}
    </style>
</head>
<body>
<div id="k_prvi">
        <div id="ljekarna"><img src="assets/logo.png" alt="Sanitas logo" width="200px" height="70px"></div>
        <div class="kartica"><a href="{{ url('/dashboard') }}" id="rubrika1">Početna</a></div>
        <div class="kartica"><a href="{{ url('/products') }}">Proizvodi</a></div>
        <div class="kartica"><a href="{{ url('/about')}}" id="rubrika3" >O projektu</a></div>
        <div class="kartica"><a href="{{ url('/model')}}">Dijagram</a></div>
        <div class="kartica"><a href="{{ url('/cart')}}">Košarica<img src="assets/cart.png" width="20" height="20"></a></div>
        @if (Route::has('login'))
        <div class="kartica">
            @auth
            <a href="{{ route('logout') }}">Odjava</a>
        </div>
        @endif
        @endauth
</div>
</div>

<div class="container">
  
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  
@yield('scripts')
     
</body>
</html>