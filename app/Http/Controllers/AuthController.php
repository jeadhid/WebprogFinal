<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        
        Log::info('Login attempt for email: ' . $request->email);

        if (Auth::attempt($credentials)) {
            Log::info('Login successful for email: ' . $request->email);            
            return redirect()->intended('/categories'); 
        }
        
        Log::warning('Login failed for email: ' . $request->email);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}