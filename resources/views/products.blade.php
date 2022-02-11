@extends('layouts.layout')
   
@section('content')

<div class="container">
    <div class="row">
        <div id="proizvodbar">
            <label>Filtriranje</label>
            <select id="izbor" onchange="funkcija(this.value)">
                <option value="abecednoaz">Abecedno(A-Z)</option>
                <option value="abecednoza">Abecedno(Z-A)</option>
                <option value="jeftino">Po cijeni(najjeftinije prvo)</option>
                <option value="skupo">Po cijeni(najskuplje prvo)</option>
            </select>
        </div>

        <div id="kosarica_x">
            <div class="dropdown">
                <button type="button" class="btn btn-info kosarica" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Košarica <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Ukupno: <span class="text-info">{{ $total }} KM</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['image'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> {{ $details['price'] }} KM</span> <span class="count"> Količina:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">Pogledaj sve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<br/>

<div class="row" id="proizvodi">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3 proizvod">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="Slika proizvoda">
                <div class="caption">
                    <h3 class="ime_proizvoda">{{ $product->name }}</h3>
                    <p class="opis_proizvoda">{{ $product->description }}</p>
                    <h5 class="cijena_proizvoda"><strong>Cijena: </strong> {{ $product->price }} KM</h5>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Dodaj u košaricu</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection
</body>
</html>