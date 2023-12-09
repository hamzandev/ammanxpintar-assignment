<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route redirects
Route::name('redirects')->group(function () {
    Route::redirect('/user', '/user/dashboard');
    Route::redirect('/auth', '/auth/login');
});

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login',  'login')->name('login')->middleware('guest');
        Route::get('/{provider}/redirect',  'redirect')->name('signin');
        Route::get('/{provider}/callback', 'callback')->name('callback');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('/user')->middleware('auth')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('courses')->group(function(){
        Route::resource('courses', CourseController::class);
    });
});
