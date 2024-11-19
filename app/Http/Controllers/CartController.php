<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function cart()
    {
        $page_title = "My Cart  - " . config('app.name');
        return view('shopping.cart', compact('page_title'));
    }
    public function orders()
    {
        $page_title = "My Orders  - " . config('app.name');
        $orders = Cart::where('status', '!=', 'added')->where('user_id', Auth::user()->id)->latest()->paginate(5);
        return view('shopping.orders', compact('page_title', 'orders'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product' => "required|exists:products,id"
        ]);

        $product = Product::findOrFail($request->input('product'));

        $checkCart = Cart::where('user_id', Auth::user()->id)
            ->where('product_id', $request->input('product'))
            ->where('status', 'added');

        if ($checkCart->exists()) {
            $item =  $checkCart->first();
            $qty = $item->quantity;
            $qty += 1;

            $amount = $item->product->price * $qty;

            $item->update([
                'quantity' => $qty,
                'amount' => $amount
            ]);
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $request->input('product'),
                'amount' => $product->price,
            ]);
        }

        Alert::toast('Added to Cart', 'success');
        return back();
    }


    public function checkout(Request $request)
    {
        $request->validate(['address' => "required"]);

        $cartItems = Auth::user()->cartItems;
        $ref = Str::random(16);
        foreach ($cartItems as $item) {
           $item->update([
                'ref' => $ref,
                'status'=> 'placed',
                'address' => $request->input('address'),
                'order_date' => now()
           ]);
        }

        Alert::toast('Order has been placed ', 'success');
        return back();
    }
}
