<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
class CartController extends Controller
{
    public function update() {
        $cart = auth()->user()->cart;
        $cart->status = 'Pending';
        $cart->save();

        $notification = 'Tu pedido se ha realizado correctamente. Te ....';
        return back()->with(compact('notification'));
    }
}
