<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::post('/product-store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
