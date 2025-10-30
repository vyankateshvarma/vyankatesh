<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMember;


Route::view('upload','add');
Route::post('upload', [AddMember::class, 'start']);

// View route
