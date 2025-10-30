<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function start(Request $request)
    {
        return $request->all();  // returns all form data
    }
}
