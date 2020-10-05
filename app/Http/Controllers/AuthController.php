<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response;
use App\User;
use Illuminate\Support\Facades\Auth;
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
        $customer = new User();
        $customer->name = $validateData['first_name']." ".$validateData['last_name'];
        $customer->email = $validateData['email'];
        $customer->password =Hash::make($validateData['password']);
        $customer->save();
        //dd($validateData);
        return "User Berhasil Di daftarkan";
       
    }
    public function loginform(){
        return view('customer.login');
    }
    public function proses_login(Request $request){
        $validateData= $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $hashPassword = Hash::make($validateData['password']);
        $mail = $validateData['email'];
        //$cek = User::where([['email',$mail],['password',$hashPassword]]);
        $credentials = $request->only('email', $hashPassword);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        
        
       // echo Hash::make($validateData['password']);
    }
    public function prosesLogin(Request $request){
        request()->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }
            return Redirect::to("/login")->with('Oppes! You have entered invalid credentials');
    }
    public function dashboard(){
        redirect(url('/'));
    }
    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email);
        echo $data->password;
        //return $data;
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return "salah Password and email Dari DB";
                //return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return  "Salah Password Email";
            //return redirect('/login')->with('alert','Password atau Email, Salah!');
        }
    }
}
