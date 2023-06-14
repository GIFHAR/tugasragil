<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('/', function () {
    return view('landingPage');
});
Route::get('industri', function () {
    return view('industri');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/industri', [App\Http\Controllers\IndustriController::class, 'industri'])->name('industri');
Route::get('/pendidikan', [App\Http\Controllers\PendidikanController::class, 'pendidikan'])->name('pendidikan');
Route::get('/perdagangan', [App\Http\Controllers\PerdaganganController::class, 'perdagangan'])->name('perdagangan');
Route::get('/peribadatan', [App\Http\Controllers\PeribadatanController::class, 'peribadatan'])->name('peribadatan');
Route::get('/perumahan', [App\Http\Controllers\PerumahanController::class, 'perumahan'])->name('perumahan');



Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');




Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);




Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@registerAction')->name('register');
