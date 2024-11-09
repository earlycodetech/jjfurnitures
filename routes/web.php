<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'welcome'])->name('home.page');
Route::get('contact', [PageController::class, 'contact'])->name('contact.page');
Route::get('shop', [PageController::class, 'shop'])->name('shop.page');

Route::get('shop/{name}', [PageController::class, 'product'])->name('product.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('admin/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');