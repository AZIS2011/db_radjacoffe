<?php

namespace App\Http\Controllers;

use App\Models\Product1;
use Illuminate\Http\Request;

class ProductApi1Controller extends Controller
{
    public function index(){
        $products1 = Product1::all();
        return response()->json(['message'=> 'success', 'data'=> $products1]);
    }
    public function show($id){
        $product1 = Product1::find($id);
        return response()->json(['message'=> 'success', 'data'=> $product1]);
    }
    public function store(Request $request){

        $product1 = Product1::create($request->all());
        return response()->json(['message'=> ' Insert Data', 'data'=> $product1]);
    }
    public function update(Request $request,$id){
        $product1 = Product1::find($id);
        $product1->update($request->all());
        return response()->json(['message'=> 'success', 'data'=> $product1]);

    }
    public function destroy($id){
        $product1 = Product1::find($id);
        $product1->delete();
        return response()->json(['message'=> 'success', 'data'=> null]);
    }
}
