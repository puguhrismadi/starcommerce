<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop_komputer;
class ProdukController extends Controller
{
    public function detailProduk($slug){
       //return "Test Produk Detail";
       //contoh laptop-2 , laptop index 0 , 2 itu index 1 dengan metode explode separator -
        $url = explode("-",$slug);
        $tabel = $url[0];
        $id = $url[1];
        if($tabel=='laptop'){
            $produk=Laptop_komputer::find($id);
           // $produk=Laptop_komputer::where('brand',$brand)->get();
           // fungsi related produk untuk query apabila kategori slug nya = laptop maka related produk find only laptop take 6
        }else if($tabel=='komputer') {
            $produk=Laptop_komputer::find($id);
        }
        return view('product.detail_product',['produk'=>$produk]);
    }

}
