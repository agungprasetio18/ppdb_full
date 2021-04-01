<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function login (Request $request)
    {
        $remember = !empty($request->remember);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials, $remember)){
            session()->flash('success', 'Login Sukses');
            return redirect('/home');
        } else {
            return back()->with('error', 'password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
