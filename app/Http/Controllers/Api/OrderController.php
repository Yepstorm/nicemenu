<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function index(Request $request){

        $input = $request->all();
        $validOrder = Validator::make($request->all(),[
            'user_id' => ['required', 'exists:users,id']
        ]);


        if($validOrder->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validOrder->errors()
            ], 401);
        }
       $user = User::find($input['user_id']);
        $orders = $user->orders()->with('order_items.menu')->get();
        return response()->json([
            'status' => true,
            'message' => 'My orders',
            'orders'=> $orders

        ], 200);

    }
    public function show(Request $request, $id){

        $input = $request->all();
        $validOrder = Validator::make($request->all(),[
            'user_id' => ['required', 'exists:users,id']
        ]);


        if($validOrder->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validOrder->errors()
            ], 401);
        }
       $user = User::find($input['user_id']);
        $order = $user->orders()->where('id', $id)->with('order_items.menu')->get();
        return response()->json([
            'status' => true,
            'message' => 'My orders',
            'orders'=> $order

        ], 200);

    }

    public function store(Request $request)


    {
        $input = $request->all();
        $validOrder = Validator::make($request->all(),[
            'user_id' => ['required', 'exists:users,id'],
            'cart_id' => ['required', 'exists:carts,id'],
            'total' => ['required', 'numeric'],
            'status' => ['required', 'string']
        ]);


        if($validOrder->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validOrder->errors()
            ], 401);
        }
       $user = User::find($input['user_id']);
       $carts = $user->carts()->with('cart_items.menu')->get();
       $order = $user->orders()->create($input );
       foreach ($carts as  $cart) {
        foreach ($cart->cart_items as $cart_item) {
            # code...
            $order->order_items()->create([
                'user_id' => $user->id,
                'menus_id' => $cart_item->menu->id,
                'quantity' => $cart_item->quantity,
                'amount' => $cart_item->menu->price,


            ]);
        }
       }
       $carts = $user->carts()->with('cart_items.menu')->delete();

    return response()->json([
            'status' => true,
            'message' => 'Order created successfully',
            'order'=> $carts

        ], 200);

    }


    }


