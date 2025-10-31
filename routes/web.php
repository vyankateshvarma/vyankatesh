<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;



Route::get('list',[MemberController::class,'show']);
// View route
