<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function daftar()
    {
        return view('daftar.register');
    }
    public function home ()
    {
        return view('dashboard');
    }
}
