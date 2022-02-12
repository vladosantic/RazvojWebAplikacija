@extends('layouts.layout')
  
@section('content')
	<div id="pozdrav_text"><p>Hvala Vam {{Auth::user()->name}}<br>na ukazanom povjerenju.<br>Vaša narudžba je uspješno zaprimljena.</div>
@endsection