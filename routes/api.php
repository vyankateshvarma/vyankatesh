<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);       // GET all
Route::post('/products', [ProductController::class, 'store']);      // CREATE
Route::get('/products/{id}', [ProductController::class, 'show']);   // GET one
Route::put('/products/{id}', [ProductController::class, 'update']); // UPDATE
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // DELETE
