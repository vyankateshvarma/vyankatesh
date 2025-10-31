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
    function delete($id){
        $data=Product::find($id);
        $data->delete();
        return redirect('list');
    }
}
