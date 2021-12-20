<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>Online ljekarna Sanitas</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/santass.jpg') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/projekt.css') }}">
        <style>
            body{background-image:url('assets/pozadina.jpg');}
        </style>
    </head>
    <body>
            <div id="kontenjer">
        <div id="glava">
            <div id="ljekarna"><img src="assets/logo.png" alt="Sanitas logo" width="200px" height="70px"></div>
            <div id="trazilica"><input type="text" class="searchTerm" placeholder="Pretražite proizvode..."><button type="submit" class="searchButton"><i>Pretraži</i></div>
    </div>
    <div id="k_prvi">
            <div class="kartica"><a href="{{ url('/dashboard') }}" id="rubrika1">Početna</a></div>
            <div class="kartica"><a href="{{ url('/proizvodi') }}">Proizvodi</a></div>
            <div class="kartica"><a href="{{ url('/about')}}" id="rubrika3" >O projektu</a></div>
            <div class="kartica">Dijagram</div>
			<div class="kartica">Košarica<img src="assets/cart.png" width="20" height="20"></div>
            <div class="kartica">Pozdrav, {{Auth::user()->name}}</div>
            @if (Route::has('login'))
            <div class="kartica">
                @auth
                <a href="{{ route('logout') }}">Odjava</a>
            </div>
            @endif
            @endauth
    </div>
    </div>
    <div id="baza">
		<img src="assets/model.png" alt="model baze">
    </div>
</div>
</body>
</html>