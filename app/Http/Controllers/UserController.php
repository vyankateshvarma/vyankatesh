<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function start(Request $request)
    {
        $data=$request->all();  // returns all form data
        $request->session()->put('user',$data['username']);
        redirect('profile');
    }
}
