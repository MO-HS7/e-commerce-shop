<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/products', [StoreController::class, 'products'])->name('products');
Route::get('/product-details', [StoreController::class, 'productDetails'])->name('product.details');
Route::get('/cart', [StoreController::class, 'cart'])->name('cart');
Route::get('/about-us', [StoreController::class, 'aboutUs'])->name('about');
Route::get('/contact', [StoreController::class, 'contact'])->name('contact');
Route::get('/', [ShopController::class, 'index']);


use App\Http\Controllers\ShopController;

Route::get('/shop', [ShopController::class, 'index']);
