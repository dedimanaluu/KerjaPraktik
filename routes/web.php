<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// login routes
Route::get('/login',[AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);

// Setelah login berhasil
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

route::post('/logout',[AuthController::class, 'logout'])->name('logout');