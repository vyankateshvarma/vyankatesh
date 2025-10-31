<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;



Route::get('list',action: [MemberController::class,'index']);
