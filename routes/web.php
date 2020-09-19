<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.homepage');
});

Route::get('/blog', function () {
    return view('page.blog');
});
Route::get('/home1',function (){
    return "<h1>ini Home</h1>";
});

Route::get('/home',function (){
    return view('home');
});
Route::get('/catalog',function (){
    return view('page.catalog');
});
Route::get('/list-product',function (){
    return view('product.list_product');
});
Route::get('/detail-product',function (){
    return view('product.detail_product');
});
Route::get('/customer/{user}',"CustomerController@detail")->name('customer.detail');

Route::get('/customer','CustomerController@index')->name('customer.index');;

Route::get('/hapus-customer/{user}','CustomerController@hapus');


Route::get('/login', 'LoginController@login');
Route::post('/proses-login', 'LoginController@loginPost');
Route::get('/register', 'LoginController@register');
Route::post('/proses-register', 'LoginController@proses_register');
Route::get('/dashboard', 'AuthController@dashboard');
Route::get('/logout', 'AuthController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
