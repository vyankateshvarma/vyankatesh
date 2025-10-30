<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController
{
    function start(){
        return DB::select('select * from users');
    }
}
