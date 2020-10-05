<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop_komputer;
use App\Kategoriproduk;
use App\Brand;
class ProdukController extends Controller
{
    public function detailProduk($slug){
       //return "Test Produk Detail";
       //contoh laptop-2 , laptop index 0 , 2 itu index 1 dengan metode explode separator -
        $url = explode("-",$slug);
        $tabel = $url[0]; //1
        $id = $url[1];
        $ktg = Kategoriproduk::all();
        $brand = Brand::all();
        if($tabel=='laptop'){
            $relatedprodukid='';
            $produk=Laptop_komputer::find($id);
            $getID =Laptop_komputer::where('id',$id)->get();
            foreach ($getID as $ktg) {
                $relatedprodukid=$ktg->kategoriproduks_id;
            }
            //dd($relatedprodukid);
            $related=Laptop_komputer::where('kategoriproduks_id',$relatedprodukid)->get()->take(6);
           // $produk=Laptop_komputer::where('brand',$brand)->get();
           // fungsi related produk untuk query apabila kategori slug nya = laptop maka related produk find only laptop take 6
        }else if($tabel=='komputer') {
            $produk=Laptop_komputer::find($id);
        }
        return view('product.detail_product',['produk'=>$produk,'ktg'=>$ktg,'brand'=>$brand,'related'=>$related]);
    }

}
