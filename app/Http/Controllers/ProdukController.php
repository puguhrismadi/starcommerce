<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function detailProduk(Request $request){
       return "Test Produk Detail";
            //return view('product.detail_product');
    }
}
