<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function index()
    {
        if (auth()->user()->role == 'siswa') {
            $userProfile = DB::table('siswas')
                ->join('users', 'siswas.nisn', '=', 'users.email')
                ->join('profiles', 'users.id', '=', 'profiles.user_id')
                ->join('kelas',  'siswas.kelas_id', '=' ,'kelas.id',)
                ->select('siswas.nama_lengkap','siswas.nisn', 'profiles.*', 'users.password', 'users.id', 'kelas.*')
                ->where('siswas.nisn', '=', auth()->user()->email)
                ->first();
        } else {
            $userProfile = DB::table('users')
                ->join('profiles', 'profiles.user_id', '=', 'users.id')
                ->select('profiles.*', 'users.password', 'users.name', 'users.id')
                ->where('users.email', '=', auth()->user()->email)
                ->first();
        }
        return view('backend.user.profile', compact('userProfile'));
    }
}
