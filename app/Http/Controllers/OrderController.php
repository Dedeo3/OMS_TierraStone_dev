<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Tampilkan form order
    public function create()
    {
        return view('order');
    }

    // Tampilkan halaman tracking
    public function track()
    {
        return view('orders-track');
    }

    // Nanti diisi query database, sekarang return kosong dulu
    public function search(Request $request)
    {
        return response()->json([]);
    }
}
