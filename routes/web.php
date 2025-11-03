<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


Route::view('login','login');
Route::view('error','error');
Route::post('session', [MemberController::class, 'index']);
