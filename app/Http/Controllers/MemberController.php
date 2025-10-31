<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class MemberController extends Controller
{
    public function index(){
    return Product::find(1)->getCompany; 
}
}
