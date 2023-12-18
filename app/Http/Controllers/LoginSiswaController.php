<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Pest\Laravel\json;

class LoginSiswaController extends Controller
{
    function index()
    {
        return view('auth.siswa.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ], [
            'email' => 'NISN field is required.'
        ]);

        if (Auth::attempt($request->except('_token'))) {
            return redirect(route('dashboard'));
        }

        return redirect('/login')->with('error', 'NISN atau Password tidak valid!');
    }
}
