<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use Illuminate\Http\Request;

Route::post("inter", [dummyAPI::class,"add"]);

