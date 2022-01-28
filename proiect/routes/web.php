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

Route::get('/marca', function () {
    return view('marca');
});

Route::get('/piesa', function () {
    return view('piesa');
});

Route::get('/adaugprodus', function () {
    return view('adaugprodus');
});

Route::get('/cautare', function () {
    return view('cautare');
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
Route::post("/marca", [UserController::class, 'marca']);
Route::post("/piesa", [UserController::class, 'piesa']);
Route::post("/adaugprodus", [UserController::class, 'adaugprodus']);
Route::post("/cautare", [UserController::class, 'cautare']);

Route::get("/", [WelcomeController::class, 'index']);
Route::get('/adaugprodus', 'App\Http\Controllers\TestController@prodfunct');
Route::get('/pagina', 'App\Http\Controllers\TestController2@prodfunct');
Route::get('/cautare', 'App\Http\Controllers\TestController3@prodfunct');