<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [ShopController::class, 'index'])->name('shop.index');

Route::get('/checkout', [CheckoutController::class, 'Checkout'])->name('shop.checkout');

Route::get('/information', function () {
    return view('information-order');
});
Route::get('/shoping-cart', function () {
    return view('shoping-cart');
});
Route::get('/shoping-detail', function () {
    return view('shoping-detail');
});


