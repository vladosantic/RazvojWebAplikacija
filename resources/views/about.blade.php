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
            <div id="trazilica"><input type="text" class="searchTerm" placeholder="Pretražite proizvode..."><button type="submit" class="searchButton"><i>Pretraži</i></div>
    </div>
    <div id="k_prvi">
            <div class="kartica"><a href="{{ url('/dashboard') }}" id="rubrika1">Početna</a></div>
            <div class="kartica"><a href="{{ url('/proizvodi') }}">Proizvodi</a></div>
            <div class="kartica"><a href="{{ url('/about') }}">O projektu</a></div>
            <div class="kartica"><a href="{{url('/model')}}">Dijagram</a></div>
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
    <div id="k_drugi">
        <div class="k2" id="naslov">O projektu</div>
        <div id="o_projektu" class="k2">
            Projekt "Online ljekarna" je web aplikacija koja
            kupcima olakšava kupovinu i narudžbu lijekova te dostavu 
            istih u što kraćem roku. Aplikacija će sadržavati i
            ponudu raznih vrsta lijekova koje kupac može odabrati
            s obzirom na oboljenje ili bolest koju ima određeni
            kupac i s obzirom na preporuku doktora. Također će i nuditi 
            izravan način komuniciranja između kupca i prodavača
            putem chata.<hr/>
            Za više informacija možete pogledati: <a href="https://drive.google.com/file/d/1zGdqHMymGcVAic0t4POs93KldaDm47jX/view?usp=sharing" target="blank" id="vizija">
                Link vizije</a>
        </div>
        
        <div class="k2" id="naslov">Motivacija</div>
        <div id="motivacija" class="k2">
            Olakšavanje kupovine, narudžbe lijekova te dostavu istih
            uz uštedu vremena i novca. Aplikacija za brzu kupovinu
            koja je pristupačna svim kupcima, u bilo kojem trenutku. 
        </div>
        <div class="k2" id="naslov">Tehnologije</div>
        <div id="tehnologije" class="k2">
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL Server</li>
            </ul>
        </div>
        
        </div>
        
        
        <br/><br/><br/>

        
        <div id="treci_dio"> 
        <div id="aut">Autori:</div>
        <br/>
        </div>

        <div id="k_treci">
        <div class="k3">
            <img src="assets/hrvoje.jpg" id="slika_autora" width="200" height="200"/>
            <p class="naslov2">Hrvoje Sesar</p><br/>
            Ja sam Hrvoje Sesar, imam 21 godinu i dolazim 
            iz Širokog Brijega. Student sam treće godine 
            preddiplomskog studija računarstva na Sveučilištu 
            u Mostaru. Odlučio sam se za ovaj studij jer sam se još odmalena 
            oduvijek zanimao za računala, pogotovo kroz igranje 
            igrica, a kasnije i za samo programiranje. Smatram da ću s 
            ovim projektom dodatno unaprijediti i proširiti svoje znanje 
            koje će mi u bliskoj budućnosti mnogo koristiti.
            <br/>
            <a href="mailto:hrvoje.sesar@fsre.sum.ba">Kontakt mail</a><br>
			<a href="https://github.com/hrvojesesar" target="blank"><img src="assets/github.png" width="25" height="25" class="github"/></a>
            <a href="https://www.facebook.com" target="blank"><img src="assets/facebook.png" width="25" height="25"/></a>
            <a href="https://www.instagram.com" target="blank"><img src="assets/instagram.png" width="25" height="25"/></a>
        </div>
        
        <div class="k3">
            <img src="assets/vlado.jpg" id="slika_autora" width="200" height="200"/>
            <p class="naslov2">Vlado Šantić</p><br/>
            Ja sam Vlado Šantić, imam 21 godinu i dolazim 
            iz Mostara. Student sam treće godine 
            preddiplomskog studija računarstva na Sveučilištu 
            u Mostaru. Odlučio sam se za ovaj studij jer su me oduvijek zanimala računala, a kasnije i 
            samo programiranje. Kroz ovaj projekt nadam se da ću 
            dodatno unaprijediti i proširiti svoje znanje 
            koje će mi u bliskoj budućnosti biti dosta korisno.<br/><br/>
            <a href="mailto:vlado.santic@fsre.sum.ba">Kontakt mail</a><br>
			<a href="https://github.com/vladosantic" target="blank"><img src="assets/github.png" width="25" height="25" class="github"/></a>
            <a href="https://www.facebook.com" target="blank"><img src="assets/facebook.png" width="25" height="25"/></a>
            <a href="https://www.instagram.com" target="blank"><img src="assets/instagram.png" width="25" height="25"/></a>
        </div>
        </div>
</body>
</html>