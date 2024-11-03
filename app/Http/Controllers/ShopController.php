<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        // Logika untuk mendapatkan data yang diperlukan untuk halaman shop
        // Misalnya: mengambil produk dari database

        return view('shop'); // Ganti 'shop' dengan nama view Anda
    }
}
