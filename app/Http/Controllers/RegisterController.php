<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
    //    return request()->all();
    $valid = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $valid['password'] = Hash::make($valid['password']);
        User::create($valid);
        return redirect()->intended('/login');
    }
}