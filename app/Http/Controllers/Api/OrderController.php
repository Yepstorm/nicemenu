<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //

    public function checkout($user)
    {
        $carts = Cart::where('user_id', $user)->get();
        $subtotal = 0;
        foreach ($carts as $cart) {
            $subtotal += $cart->quantity * $cart->menu->price;
        }

        // return view('frontend.checkout', compact('carts', 'subtotal'));
    }

}
