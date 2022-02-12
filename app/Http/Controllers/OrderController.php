<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return redirect()->back()->with('success', 'Narudžba uspješno izvršena!');
    }

    public function store(Request $request)
    {
        $order = new Order;
        $order->ime = $request->input('f-name');
        $order->prezime = $request->input('l-name');
        $order->adresa = $request->input('address');
        $order->grad = $request->input('city');
        $order->pbr = $request->input('zip');
        $order->drzava = $request->input('state');
        $order->save();
        return redirect()->back()->with('status','Narudžba uspješno izvršena!');
    }
}