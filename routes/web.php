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

Route::get('/', "HomeController@index")->name('homepage');

Route::get('/blog', function () {
    return view('page.blog');
});

Route::get('/catalog',function (){
    return view('page.catalog');
});
Route::get('/list-product',function (){
    return view('product.list_product');
});
Route::get('/artikel/{slug}',"HomeController@artikel");
//Route::get('/detail-product/{slug}',"ProdukController@detailProduk");

Route::get('/detail-produk/{slug}',"ProdukController@detailProduk");

Route::get('/customer/{user}',"CustomerController@detail")->name('customer.detail');

Route::get('/customer','CustomerController@index')->name('customer.index');;
Route::get('/account/{user}',"CustomerController@edit")->name('customer.edit');

//untuk proses edit 
Route::patch('/customer/{user}','CustomerController@prosesEdit')->name('update.account');
Route::get('/hapus-customer/{user}','CustomerController@hapus');


// Route::get('/login', 'LoginController@login');
// Route::post('/proses-login', 'LoginController@loginPost');
// Route::get('/register', 'LoginController@register');
// Route::post('/proses-register', 'LoginController@proses_register');
// Route::get('/dashboard', 'AuthController@dashboard');
// Route::get('/logout', 'AuthController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
