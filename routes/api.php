<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApiController;
use Illuminate\Http\Request;
Route::post("add", [DummyApiController::class, "add"]);
Route::put("update", [DummyApiController::class, "update"]);
Route::delete("delete", [DummyApiController::class, "delete"]);
Route::get('/search/{name}', [DummyApiController::class, 'search']);
Route::post('v2/save',[DummyApiController::class,'save']);
Route::post('v3/save',[DummyApiController::class,'resaved']);