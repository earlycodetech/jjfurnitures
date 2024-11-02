<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'welcome'])->name('home.page');
Route::get('contact', [PageController::class, 'contact'])->name('contact.page');

Route::get('product/{name}', [PageController::class, 'product'])->name('product.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
