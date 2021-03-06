<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    var $brand,$brand1,$brand2;
    public function __construct()
    {
       
        $this->brand1 = Brand::all();
        $this->brand2 = Brand::all();
        $this->brand = Brand::all();
    }
    public function register(){
        return view('customer.register');
    }
    public function login(){
        return "Test login";
        //return view('customer.login',['brand'=>$this->brand,'brand1'=>$this->brand1]);
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
            return Redirect::to("/login")->with('Username dan Password yang anda masukkan Tidak tepat');
    }
    public function dashboard(){
        redirect(url('/'));
    }
    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data =  DB::table('users')->where('email', $email)->first();
        //echo $data->name;
        //return $password;
        //dd($data->email);
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
            return  "Salah Passwor Email";
            //return redirect('/login')->with('alert','Password atau Email, Salah!');
        }
    }
}
