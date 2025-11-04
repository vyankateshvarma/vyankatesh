<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class DummyApiController extends Controller
{
    public function add(Request $request)
    {
        $divice = new Product();
        $divice->name = $request->name;
        $divice->description = $request->description;
        $divice->price = $request->price;
        $result = $divice->save();
        if ($result) {
            return ["result" => "data has been added successfully"];
        } else {
            return ["result" => "Something error Operaration Failed"];
        }
    }
    public function update(Request $request)
    {
        $divice = Product::find($request->id);

        if (!$divice) {
            return ["result" => "Record not found"];
        }
        $divice->name = $request->name;
        $divice->description = $request->description;
        $divice->price = $request->price;
        $result = $divice->save();
        if ($result) {
            return ["result" => "Data Updated Successfully"];
        } else {
            return ["result" => "Error Occoured"];
        }
    }
    public function delete(Request $request)
    {
        $divice = Product::find($request->id);
        if (!$divice) {
            return ["result" => "Record not found"];
        } else {
            $divice->delete();
        }
        function search($name)
        {
            return Product::where("name", "like", "%" . $name . "%")->get();
        }
    }
    public function save(Request $request)
    {
        $rules = array(
            "price" => "required|max:5|min:2"
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return ["result" => $validator->errors()];
        } else {
            $divice = new Product();
            $divice->name = $request->name;
            $divice->description = $request->description;
            $divice->price = $request->price;
            $result = $divice->save();
            if ($result) {
                return ["result" => "data has been added successfully"];
            } else {
                return ["result" => "Something error Operaration Failed"];
            }
        }
    }
    public function resaved(Request $request){
        $imp=array(
            "name"=>"required|max:7|min:2"
        );
        $validator = Validator::make($request->all(), $imp);
        if ($validator->fails()) {
            return ["result"=> $validator->errors()];
    }
    
}
}