<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Online ljekarna Sanitas</title>
        <script src="js/skripta.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/santass.jpg') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/projekt.css') }}">
        <style>
            body{background-image:url('assets/pozadina.jpg');}
        </style>
    </head>
    <body>
    <div id="k_prvi">
        <div id="ljekarna"><img src="assets/logo.png" alt="Sanitas logo" width="200px" height="70px"></div>
        <div class="kartica"><a href="{{ url('/dashboard') }}" id="rubrika1">Početna</a></div>
        <div class="kartica"><a href="{{ url('/proizvodi') }}">Proizvodi</a></div>
        <div class="kartica"><a href="{{ url('/about')}}" id="rubrika3" >O projektu</a></div>
        <div class="kartica"><a href="{{ url('/model')}}">Dijagram</a></div>
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
    </div></br>
    <div id="proizvodbar">
        <label>Filtriranje</label>
        <select id="izbor" onchange="funkcija(this.value)">
            <option value="abecednoaz">Abecedno(A-Z)</option>
            <option value="abecednoza">Abecedno(Z-A)</option>
            <option value="jeftino">Po cijeni(najjeftinije prvo)</option>
            <option value="skupo">Po cijeni(najskuplje prvo)</option>
        </select>
    </div>
    <div id="proizvodi">
    <div class="proizvod">
        <img class="slikapr" src="assets/aspirin.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Aspirin tablete</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>20,70 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/alpenkraft.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Alpenkraft sirup</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>26,50 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/biotic.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Omni Biotic Metabolic vrećice</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>88,00 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/antemig.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Pileje Antemig tablete</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>59,90 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/osteopan.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Osteopan Plus tablete (60 tableta)</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>25,00 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/yasenka.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Yasenka Imuno BC 500 kapsule</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>53,50 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/pip_farmakol.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Pip Farmakol Propolis 150 sprej</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>14,40 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/arkovital.png" alt="Slika proizvoda" width="256px" height="256px">
        <h3 class="ime_proizvoda">Arkopharma Arkovital Pure Energy tablete</h3>
        <br/>
        <p class="cijena_proizvoda">Cijena:</p><h4>37,20 KM</h4>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
</div>
</body>
</html>