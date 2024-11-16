<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(8);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->sortBy('name');
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'stock' => "required|numeric",
            'color' => "required|string",
            'category' => "required|exists:categories,id",
            'image' => "required|image|mimes:png,jpg,jpeg,gif|max:2048",
            'description' => "required|string",
        ]);

        $sku = Str::random(16);

        $file = $request->file('image');
        $ext = $file->extension();
        $fileName = Str::random(36) . "." . $ext;
        $file->move('uploads', $fileName);


        Product::create([
            'category_id' => $data['category'],
            'sku' => $sku,
            'name' => $data['name'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'color' => $data['color'],
            'image' => $fileName,
            'description' => $data['description']
        ]);

        Alert::success('Created Successfully');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $sku)
    {
        $product = Product::where('sku',  $sku)->firstOrFail();
        $categories = Category::all()->sortBy('name');
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $sku)
    {
        $product = Product::where('sku',  $sku)->firstOrFail();
        $data = $request->validate([
            'name' => "required|string",
            'price' => "required|numeric",
            'stock' => "required|numeric",
            'color' => "required|string",
            'category' => "nullable|exists:categories,id",
            'image' => "nullable|image|mimes:png,jpg,jpeg,gif|max:2048",
            'description' => "required|string",
        ]);


        if ($request->hasFile('image')) {
            $oldFile = $product->image;

            $file = $request->file('image');
            $ext = $file->extension();
            $fileName = Str::random(36) . "." . $ext;
            $file->move('uploads', $fileName);

            Product::where('sku', $sku)->update([
                'category_id' => $data['category'] ? $data['category'] : $product->category_id,
                'name' => $data['name'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'color' => $data['color'],
                'image' => $fileName,
                'description' => $data['description']
            ]);

            if (File::exists(public_path('uploads/' . $oldFile))) {
                File::delete(public_path('uploads/' . $oldFile));
            }
        } else {
            Product::where('sku', $sku)->update([
                'category_id' => $data['category'] ? $data['category'] : $product->category_id,
                'name' => $data['name'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'color' => $data['color'],
                'description' => $data['description']
            ]);
        }


        Alert::success('Update Successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $sku)
    {
        $product = Product::where('sku',  $sku)->firstOrFail();

        $oldFile = $product->image;

        if ($product->delete()) {

            if (File::exists(public_path('uploads/' . $oldFile))) {
                File::delete(public_path('uploads/' . $oldFile));
            }

            Alert::success("Product Deleted");
        } else {
            Alert::error("Failed to delete product");
        }
        return back();
    }
}
