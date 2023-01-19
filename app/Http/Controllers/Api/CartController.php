<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function addCart(Request $request)
    {
        $request->validate([
            'menu_id' => ['required', 'exists:menus,id'],
            'quantity' => ['required', 'numeric']
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $cart = $user->cart;
        if(!$cart){
            $cart = $user->cart()->create([]);
        }

        $check = $cart->cart_items()->where('menu_id', $request->input('menu_id'))->update([
            'quantity' => $request->input('qunatity')
        ]);

        if(!$check){
            $cart->cart_items()->create([
                'menu_id' => $request->input('menu_id'),
                'quantity' => $request->input('quantity')
            ]);
        }

        // return back()->with('success', 'Item added to Cart!');


        return response()->json([
            'status' => true,
            'message' =>'Item added to Cart!'
        ]);
    }

    public function getCart($user )
    {
        $carts = Cart::where('user_id', $user)->get();
        $subtotal = 0;
        foreach ($carts as $cart) {
            $subtotal += $cart->quantity * $cart->menu->price;
        }

        //  return view('frontend.cart', compact('carts', 'subtotal'));

         return response()->json([
            'status' => true,
            'subtotal' => $subtotal
        ]);
    }

    public function updateCart(Request $request, $user)
    {
        $carts = Cart::where('user_id', $user)->get();

        foreach ($carts as $cart) {
            $quantity = "item_".$cart->menu_id;
            $cart->update([
                'quantity' => $request->input('quantity')
            ]);
        }

        // return redirect(route('getcart', $user));
        return response()->json([
            'status' => true,
            'message' => 'Cart Updated successfully'
        ]);
    }

    public function destroy(Cart $cart, $user)
    {
        $cart->delete();

        // return redirect(route('getcart', $user));

        return response()->json([
            'status' => true,
            'message' => 'Blog Has Been Deleted',
        ]);
    }
}
