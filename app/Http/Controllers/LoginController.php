<?php

namespace App\Http\Controllers;

use Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $data= $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else{
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
