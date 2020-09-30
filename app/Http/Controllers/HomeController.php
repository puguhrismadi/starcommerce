<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Kategoriproduk;
use App\Laptop_komputer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blog = Post::where('featured','1')->get()->take(2);
        $kategori = Kategoriproduk::all();
        $laptopk = Laptop_komputer::where('feature',1)->get();
        return view('page.homepage',['blog'=>$blog,'kategori'=>$kategori,'laptopk'=>$laptopk]);
    }
    public function artikel($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
	
        return view('page.detail_artikel',['post'=>$post]);
    }
}
