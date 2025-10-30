<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

// Your route definitions
Route::get('/user', [UserController::class, 'getData']);
