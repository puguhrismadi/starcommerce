<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('customer.register');
    }
    public function login(){
        return view('customer.login');
    }
    public function proses_register(Request $request){
       
        $validateData=$request->validate([
            'first_name'=>'required',
            'last_name'=>'',
            'email'=>'required|email',
            'password'=>'required_with:password_confirmation|confirmed',
            't_and_c'=>'required|in:1'
        ]);

        
        dd($validateData);
        return "proses register";
    }
    public function loginform(){
        return view('customer.login');
    }
    public function proses_login(Request $request){
        $validateData= $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        dump($validateData);
    }
    public function dashboard(){
        redirect(url('/'));
    }
}
