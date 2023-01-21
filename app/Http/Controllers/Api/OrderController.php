<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //

    public function create(Request $request)


    {
        $order = new Order;
        $order->cart_id = $request->cart_id;
        $order->user_id = $request->user_id;
         $order->status = $request->status;
        $order->total = $request->total;
        $order->save();

        return response()->json(['order_id' => $order->id], 201);
    }


    }


