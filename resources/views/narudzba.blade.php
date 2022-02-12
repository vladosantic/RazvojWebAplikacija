@extends('layouts.layout')
  
@section('content')
<div class="order">
    <div class="container">
        <form form action="{{ url('add-order') }}" method="POST">
            @csrf
            <h1>
                <i class="fas fa-shipping-fast"></i>
                Detalji narudžbe
            </h1>
            <div class="name">
                <div>
                    <label for="f-name">Ime</label>
                    <input type="text" name="f-name">
                </div>
                <div>
                    <label for="l-name">Prezime</label>
                    <input type="text" name="l-name">
                </div>
            </div>
            <div class="street">
                <label for="name">Adresa</label>
                <input type="text" name="address">
            </div>
            <div class="address-info">
                <div>
                    <label for="city">Grad</label>
                    <input type="text" name="city">
                </div>
                <div>
                    <label for="state">Država</label>
                    <input type="text" name="state">
                </div>
                <div>
                    <label for="zip">Poštanski broj</label>
                    <input type="text" name="zip">
                </div>
            </div>
            <h1>
                Informacije o plaćanju
            </h1>
            <div class="cc-num">
                <label for="card-num">Broj kartice</label>
                <input type="text" name="card-num">
            </div>
            <div class="cc-info">
                <div>
                    <label for="card-num">Datum isteka</label>
                    <input type="text" name="expire">
                </div>
                <div>
                    <label for="card-num">CCV</label>
                    <input type="text" name="security">
                </div>
            </div>
            <div class="btns">
                <button type="submit">Naruči</button>
                <a href="{{ url('/cart')}}">Nazad na košaricu</a>
            </div>
        </form>
    </div>
</div>
@endsection
