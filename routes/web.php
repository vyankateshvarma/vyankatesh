<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [UserController::class, 'userHome']);
Route::get('/about', [UserController::class, 'aboutUser']);
Route::get('/data', [UserController::class, 'info']);
Route::get('/admin', [UserController::class, 'admin']);

Route::get('/form', function () {
    return view('form');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/new',[UserController::class,'viewload']);




Route::view('/login', 'login');
Route::post('/login', [FormController::class, 'info']);