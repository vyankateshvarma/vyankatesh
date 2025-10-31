<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MemberController extends Controller
{
    function show(){
    $data = Product::all();
    return view('list',['member'=>$data]);
    }
}
