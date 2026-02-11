<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('landing');
});

// LOGIN - Visa sidan
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');


// LOGIN - Hantera när användaren trycker på knappen
Route::post('/login', [AuthController::class, 'login']);

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});


