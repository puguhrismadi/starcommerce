<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return "Halaman Index Customer";
    }
    public function viewform(){
        return view('customer.register');
    }
}
