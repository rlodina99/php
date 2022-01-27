<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/pagina', function () {
    return view('pagina');
});

Route::get('/logout', function () {

    session()->forget('user');
    session()->flush();
    return redirect('login');
});


Route::view('/register', 'register');
Route::view('/reset', 'reset');
Route::view('/date', 'date');
Route::post("/login", [UserController::class, 'login']);
Route::post("/reset", [UserController::class, 'reset']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [WelcomeController::class, 'index']);
