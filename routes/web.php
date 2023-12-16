<?php

use App\Http\Controllers\Backend\{AuthController,  DashboardController,  KelasController, MataPelajaranController, NotificationController, ProfileController,  SiswaController};
use Illuminate\Support\Facades\Route;

// Route redirects
Route::name('redirects')->group(function () {
    Route::redirect('/dashboard', '/user/dashboard')->name('dashboard');
    Route::redirect('/login', '/auth/login')->name('login');
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', fn () => view('frontend/about'));

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login',  'login')->name('login')->middleware('guest');
        Route::get('/register',  'register')->name('register')->middleware('guest');
        Route::post('/signup',  'signup')->name('signup')->middleware('guest');
        Route::get('/verify-email/{email}',  'verify')->name('verify-email');
        Route::get('/{provider}/redirect',  'redirect')->name('signin');
        Route::get('/{provider}/callback', 'callback')->name('callback');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('/user')->middleware('auth')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(NotificationController::class)->prefix('notification')
        ->name('notification.')
        ->group(function () {
            Route::get('/', 'index')->name('list');
            Route::get('/{id}', 'show')->name('show');
        });

    Route::prefix('/setting')->name('setting.')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/notification', [ProfileController::class, 'index'])->name('notification');
    });

    Route::resource('mapel', MataPelajaranController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
});
