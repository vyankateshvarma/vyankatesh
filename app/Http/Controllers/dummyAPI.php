<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use LDAP\Result;

class dummyAPI extends Controller
{
    function add(Request $request){
        $divice= new Product();
        $divice->name=$request->name;
        $divice->description=$request->description;
        $divice->price=$request->price;
        $result=$divice->save();
        if ($result){
             return ["result"=>"data has been added successfully"];
        }
        else{
            return ["result"=> "Something error Operaration Failed"];
        }
    }
}
