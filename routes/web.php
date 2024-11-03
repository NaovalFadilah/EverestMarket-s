<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ShopingDetailController;

Route::get('/', [ShopController::class, 'shop'])->name('shop.index');

Route::get('/checkout', [CheckoutController::class, 'Checkout'])->name('shop.checkout');

Route::get('/information', [InformationController::class, 'information'])->name('information');

Route::get('/shoping-detail', [ShopingDetailController::class, 'shopingdetail'])->name('shopingdetail');

Route::get('/shoping-cart', function () {
    return view('shoping-cart');
});


