<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' =>'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        
        if (Auth::attempt($cred)){
           
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('loginError', 'login failed!');
    }
}