<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
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
            <div id="trazilica"><input type="text" class="searchTerm" placeholder="Pretražite proizvode..."><button type="submit" class="searchButton">Pretraži</div>
    </div>
    <div id="k_prvi">
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
        <label for="filter">Filtriranje</label>
        <select name="filter" id="opcija">
            <option value="auzlazno">Abecedno (uzlazno)</option>
            <option value="asilazno">Abecedno (silazno)</option>
            <option value="jeftino" selected>Po cijeni (od najjeftinijeg)</option>
            <option value="skupo">Po cijeni (od najskupljeg)</option>
        </select>
    </div>
    <div id="proizvodi">
    <div class="proizvod">
        <img class="slikapr" src="assets/aspirin.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Aspirin tablete</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 20,70 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/alpenkraft.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Alpenkraft sirup</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 26,50 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/biotic.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Omni Biotic Metabolic vrećice</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 88,00 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="24" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/antemig.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Pileje Antemig tablete</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 59,90 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/osteopan.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Osteopan Plus tablete (60 tableta)</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 25,00 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/yasenka.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Yasenka Imuno BC 500 kapsule</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 53,50 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/pip_farmakol.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Pip Farmakol Propolis 150 sprej</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 14,40 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
    <div class="proizvod">
        <img class="slikapr" src="assets/arkovital.png" alt="Slika proizvoda" width="256px" height="256px">
        <div class="ime_proizvoda">Arkopharma Arkovital Pure Energy tablete</div>
        <br/>
        <div class="cijena_proizvoda">Cijena: 37,20 KM</div>
        <div class="kosarica">U košaricu<img src="assets/cart.png" width="20" height="20"></div>
    </div>
</div>
</body>
</html>