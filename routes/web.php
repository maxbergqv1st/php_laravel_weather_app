<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; 


Route::get('/', function () {
    return view('landing');
});

// LOGIN - Visa sidan
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');


// LOGIN - Hantera när användaren trycker på knappen
Route::post('/login', [LoginController::class, 'login']);

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Visa registreringsformuläret (GET)
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');

// Ta emot och spara användaren (POST)
Route::post('/register', [RegisterController::class, 'store']);

use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index']);



