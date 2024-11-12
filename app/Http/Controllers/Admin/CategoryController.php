<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'check.admin']);
    }

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


    public function  edit($id)  {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    
    public function  update(Request $request, $id)  {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'name' => "required|string|unique:categories,name,{$id}",
        ]);

        $slug = Str::slug($data['name']);
       
        // Category::where('id', $id)->update([
        //     'name' => $data['name'],
        //     'slug' => $slug
        // ]);
        $category->update([
            'name' => $data['name'],
            'slug' => $slug
        ]);
        Alert::success('Updated', "Category updated successfully");
        return back();
    }

    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        Alert::success('Deleted', "Category deleted successfully");
        return back();
    }
}
