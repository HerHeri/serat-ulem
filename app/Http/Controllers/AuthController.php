<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request){
        return view('auth.login');
    }

    function loginStore(Request $request){
        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];
        if (auth()->attempt($credentials)) {
            $user   = User::where('email', $request->email)->first();
            return redirect('/dashboard');
        }
        return redirect()->back()->with('error', 'Username atau password salah');
    }

    function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
