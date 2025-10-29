<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Models\User;
use App\Http\Middleware\agecheck;

Route::view("users","users");
Route::view("home","home");
Route::view("noaccess","noaccess");

Route::middleware(['ageCheck'])->group(function(){
    Route::view('users','users');
    Route::get('/',function(){
        return view('noaccess ');
    }); 
});