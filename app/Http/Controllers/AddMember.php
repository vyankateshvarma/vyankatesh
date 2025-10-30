<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    function start(Request $request){
    return $request->file('file')->store('docs');
    }
}
