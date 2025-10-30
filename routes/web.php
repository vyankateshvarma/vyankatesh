<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Models\User;
use App\Http\Middleware\agecheck;

Route::view("users","users")->middleware('agecheck');
Route::view("home","home");
Route::view("noaccess","noaccess");
