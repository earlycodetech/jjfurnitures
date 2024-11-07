<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }


    public function store(Request $request)
    {
        // dd($request->input());
        $data = $request->validate([
            'name' => "required|string|unique:categories,name",
        ]);

        $slug = Str::slug($data['name']);

        Category::create([
            'name' => $data['name'],
            'slug' => $slug
        ]);

        Alert::success('Created', "Category created successfully");
        return back();
    }
}
