<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Delete route
Route::delete('/users', [UserController::class, 'start']);

// View route
Route::view('/login', 'users');
