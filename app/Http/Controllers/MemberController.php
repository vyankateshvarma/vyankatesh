<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class MemberController extends Controller
{
    function index(Request $request){
       
        $request->session()->put('user', $request->input('user'));
        echo ($request->input('user'));
        exit;
    }
}