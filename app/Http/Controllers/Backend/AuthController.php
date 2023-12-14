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

    function register()  {
        return view('auth.register');
    }

    function signup(Request $request) {
        try {
            $check = User::where('email', $request->email)->first();
            if ($check) {
                return redirect(route('auth.signup'))->with('error', 'That email has been registered. Try another one!');
            }
            // Auth::login($request->except('_token'));
            return redirect(route('auth.activate-email', $request->email))->with('message', 'Your account has been registered but have\'nt actived yet. Check your email to acitvate your account.');
        } catch (\Throwable $th) {
            return redirect(route('auth.register'))->with('error', 'Something went wrong! Try again later.');
            // return dd($th->getMessage());
        }
        return $request->all();
    }


    function activate($email) {
        return view('auth.verify-email');
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
