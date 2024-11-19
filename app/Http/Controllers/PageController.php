<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $products = Product::latest()->limit(4)->get();
        $gallery = Gallery::latest()->limit(5)->get();
        return view('welcome', compact('products', 'gallery'));
    }

    public function contact()
    {
        $page_title = "Contact  - " . config('app.name');
        return view('contact', compact('page_title'));
    }
    public function cart()
    {
        $page_title = "My Cart  - " . config('app.name');
        return view('shopping.cart', compact('page_title'));
    }
    public function orders()
    {
        $page_title = "My Orders  - " . config('app.name');
        return view('shopping.orders', compact('page_title'));
    }
    public function shop(Request $request)
    {
        $searchWord = $request->input('search');
        $page_title = "Shop  - " . config('app.name');

        if (!$searchWord) {
            $products = Product::latest()->paginate(16);
        }else{
            $products = Product::where('name', 'like', "%$searchWord%")
                ->orWhere('price', 'like', "%$searchWord%")
                ->orWhere('color', 'like', "%$searchWord%")
                ->paginate(16);
        }

        return view('shop', compact('page_title', 'products', 'searchWord'));
    }
    public function product($sku)
    {
        $product = Product::where('sku', $sku)->firstOrFail();
      
        return view('products', compact('product'));
    }
}
