<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    function login()  {
        return view('auth.login');
    }

    function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    function callback($provider)
    {
        $googleUser = Socialite::driver($provider)->user();
        // return dd($googleUser);
        $data = [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'avatar' => $googleUser->avatar,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ];
        $user = User::updateOrCreate(
            [
                'google_id' => $googleUser->id
            ],
            $data
        );

        Auth::login($user);
        Session::push('user', json_decode(json_encode($data)));
        return redirect(route('user.dashboard'));
    }

    function logout()
    {
        Auth::logout();
        Session::remove('user');
        return redirect(route('home'));
    }

}
