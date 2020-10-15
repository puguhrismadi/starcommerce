<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop_komputer;
use App\Kategoriproduk;
use App\Hardwaresoftware;
use App\Brand;
class ProdukController extends Controller
{
    public function slugGetProduk($slug,$model,$tabel){
     
        $idktg='';
        
        $ktg = Kategoriproduk::where('slug',$slug)->get();
        foreach ($ktg as $value) {
            $idktg=$value->id;         
            $data=$model::where('kategoriproduks_id',$idktg)->paginate(9);                
        }
        //dd($data);
        
        return $data;
    }
    public function detailProduk($slug){
       //return "Test Produk Detail";
       //contoh laptop-2 , laptop index 0 , 2 itu index 1 dengan metode explode separator -
        $brand = Brand::all();

        $url = explode("-",$slug);
        $tabel = $url[0]; //1
        $id = $url[1];
        $ktg = Kategoriproduk::all();
        $kategori = Kategoriproduk::all();
        $relatedprodukid='';
        $detailflag=0;
        if($tabel=='laptop'){
            
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
            $getID =Laptop_komputer::where('id',$id)->get();
            foreach ($getID as $ktg) {
                $relatedprodukid=$ktg->kategoriproduks_id;
            }
            $related=Laptop_komputer::where('kategoriproduks_id',$relatedprodukid)->get()->take(6);
        }else{
            $produk=Hardwaresoftware::find($id);
            $getID =Hardwaresoftware::where('id',$id)->get();
            $detailflag=1;
            foreach ($getID as $ktg) {
                $relatedprodukid=$ktg->kategoriproduks_id;
            }
            $related=Hardwaresoftware::where('kategoriproduks_id',$relatedprodukid)->get()->take(6);
        }

        return view('product.detail_product',['produk'=>$produk,'ktg'=>$ktg,'brand'=>$brand,'related'=>$related,'kategori'=>$kategori,'detailflag'=>$detailflag]);
    }
    public function listProduk($slug=null){
      //  $brandlaptopkomputer=App\Brand::withCount(['laptop_komputer'])->get();
        $brand = Brand::all();
        $ktg = Kategoriproduk::all();
        if($slug==null){
            return redirect()->route('produk', ['kategori' => 'laptop']);
        }
        $kategori = Kategoriproduk::where('slug',$slug)->get();
        
        if($slug=='accesories'){
            $produk = $this->slugGetProduk($slug,"App\Hardwaresoftware",'hardwaresoftwares');
            $ktgterpilih = Hardwaresoftware::where('kategoriproduks_id',5)->count();
        }elseif($slug=='spare-part'){
            $produk = $this->slugGetProduk($slug,"App\Hardwaresoftware",'hardwaresoftwares');
            $ktgterpilih = Hardwaresoftware::where('kategoriproduks_id',4)->count();
        }elseif($slug=='software'){
            $produk = $this->slugGetProduk($slug,"App\Hardwaresoftware",'hardwaresoftwares');
            $ktgterpilih = Hardwaresoftware::where('kategoriproduks_id',6)->count();
        }elseif($slug=='hardware'){
            $produk = $this->slugGetProduk($slug,"App\Hardwaresoftware",'hardwaresoftwares');
            $ktgterpilih = Hardwaresoftware::where('kategoriproduks_id',3)->count();
        }else{
            if($slug=="laptop"){
                 //default kategori produk laptop 
                $produk = $this->slugGetProduk('laptop',"App\Laptop_komputer",'laptop_komputers');
                 //mencari laptop dari tabel laptop komputer
                $ktgterpilih = Laptop_komputer::where('kategoriproduks_id',1)->count();
            }elseif($slug=="komputer"){
                  //default kategori produk komputer rakitan 
                  $produk = $this->slugGetProduk('komputer',"App\Laptop_komputer",'laptop_komputers');
                  $ktgterpilih = Laptop_komputer::where('kategoriproduks_id',2)->count();
            }else{
                //default kategori produk laptop 
                $produk = $this->slugGetProduk('laptop',"App\Laptop_komputer",'laptop_komputers');
                 //mencari laptop dari tabel laptop komputer
                $ktgterpilih = Laptop_komputer::where('kategoriproduks_id',1)->count();
            }
           
        }
        
        //return $produk;
       return view('product.list_product',['ktg'=>$ktg,'kategori'=>$kategori,'produk'=>$produk,'ktgterpilih'=>$ktgterpilih,'slug'=>$slug,'brand'=>$brand]);
    }

}
