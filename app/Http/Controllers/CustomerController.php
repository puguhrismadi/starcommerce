<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class CustomerController extends Controller
{
    public function index(){
        $userlist = User::all();
        return view('admin.list_customer',['user'=>$userlist]);
    }
    public function hapus(User $user){
        // dd($user);
       $user->delete();
       return redirect()->route('customer.index')->with('pesanhapus',"Hapus Data $user->name berhasil");
    }
    public function detail($user){
        $userone=User::find($user);
        return view('admin.detail_customer',['user'=>$userone]);
    }
    public function edit($user){
        $userone=User::find($user);
        return view('admin.form_update',['user'=>$userone]);
    }
    public function prosesEdit(Request $request,User $user){
        $validateData = $request->validate([
            'name'=>'required',
            'email'=>'required'
            
        ]);
        User::where('id',$user->id)->update($validateData);
       return redirect(url('/customer'))->with('pesan',"Data Berhasil di Ubah {$validateData['name']}");
    }
   
}
