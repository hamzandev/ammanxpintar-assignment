<?php

use App\Http\Controllers\Backend\{AuthController,  DashboardController,  KelasController, MataPelajaranController, NotificationController, ProfileController,  SiswaController};
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


Route::group(['middleware' => 'guest'], function () {
    // login siswa
    Route::controller(LoginSiswaController::class)
        ->name('siswa.')
        ->group(function () {
            Route::get('/login', 'index')->name('form');
            Route::post('/login', 'login')->name('login');
        });

    // login (admin, petugas)
    Route::prefix('/admin')
        ->name('admin.')
        ->controller(LoginController::class)
        ->group(function () {
            Route::get('/login', 'index')->name('form');
            Route::post('/login', 'login')->name('login');
        });
});

Route::group(['middleware' => 'auth'], function () {
    // master data
    Route::prefix('/master-data')->name('master-data.')
        ->middleware('userAkses:admin')
        ->group(function () {
            Route::resource('mapel', MataPelajaranController::class);
            Route::resource('siswa', SiswaController::class);
            Route::resource('kelas', KelasController::class);
            Route::resource('users', UserController::class);
    });

    // notification
    Route::controller(NotificationController::class)->prefix('/notification')
        ->name('notification.')
        ->group(function () {
            Route::get('/', 'index')->name('list');
            Route::get('/{id}', 'show')->name('show');
        });

    // settings
    Route::prefix('/setting')->name('setting.')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/notification', [ProfileController::class, 'index'])->name('notification');
    });

    // logout
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});

// Route::prefix('/auth')->name('auth.')->group(function () {
//     Route::controller(AuthController::class)->group(function () {
//         Route::get('/login',  'login')->name('login')->middleware('guest');
//         Route::get('/register',  'register')->name('register')->middleware('guest');
//         Route::post('/signup',  'signup')->name('signup')->middleware('guest');
//         Route::get('/verify-email/{email}',  'verify')->name('verify-email');
//         Route::get('/{provider}/redirect',  'redirect')->name('signin');
//         Route::get('/{provider}/callback', 'callback')->name('callback');
//         Route::get('/logout', 'logout')->name('logout');
//     });
// });
