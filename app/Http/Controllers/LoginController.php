<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    function index() {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->except('_token'))) {
            return redirect(route('dashboard'));
        }
        return redirect('/admin/login');
    }

    function logout()
    {
        Auth::logout();
        Session::remove('user');
        return redirect(route('siswa.form'));
    }
}
