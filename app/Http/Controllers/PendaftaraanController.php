<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pendaftaraan\Register;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class PendaftaraanController extends Controller
{
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/login')->with('success', 'Daftar Berhasil Silahkan Login');
        
    }
}
