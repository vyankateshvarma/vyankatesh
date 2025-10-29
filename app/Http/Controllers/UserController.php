<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function viewload(){
        $data=['vyankatesh','vyanky','active'];
        return view("new",["users"=>$data]);
    }
}