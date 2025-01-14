<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('stok');
    }

    function detail(Request $request)
    {
        $array_produks = json_decode($request->produk_array);

        return view("penjualan", compact('array_produks'));
    }
}
