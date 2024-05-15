<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Masukkan username yang telah terdaftar pada sistem',
            'password.required'=>'Masukkan password yang telah terdaftar pada sistem'
        ]);
        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}
