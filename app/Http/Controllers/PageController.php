<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $products = Product::latest()->limit(4)->get();
        return view('welcome', compact('products'));
    }

    public function contact()
    {
        $page_title = "Contact  - " . config('app.name');
        return view('contact', compact('page_title'));
    }
    public function shop()
    {
        $page_title = "Shop  - " . config('app.name');
        return view('shop', compact('page_title'));
    }
    public function product($name)  
    {   

        $price = null;

        if ($name == 'iphone') {
           $price = 1000;
        }
        elseif ($name == 'samsung')
        {
            $price = 5000;
        }

        // dd($price);
        return view('products', compact('name','price'));

    }
}
