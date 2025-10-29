<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function info(Request $req)
    {
        $req->validate([
            'username' => 'required|man:10',
            'password'=>'required | min:5'
        ]);

        return response()->json($req->input());
    }
}
