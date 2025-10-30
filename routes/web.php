<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Delete route
Route::post('/user', [UserController::class, 'start']);

// View route
Route::view('/login', 'login');
Route::view('profile','profile');
