<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function on_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role == "admin")
            {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('index');
            }
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function on_logout()
    {
        Auth()->logout();
        return redirect("/");
    }
}
