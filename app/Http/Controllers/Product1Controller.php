<?php

namespace App\Http\Controllers;

use App\Models\Product1;
use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    public function index()
    {
        $products1 = Product1::all(); //nama table + model

        return view('products1.index', compact(['products1']));
    }
    public function create()
    {
        return view('products1.create');
    }
    public function store(Request $request)
    {
        Product1::create($request->all());
        return redirect('/products1');
    }
    public function edit($id)
    {
        $product1 = Product1::find($id);
        return view('products1.edit', compact(['product1']));
    }
    public function update(Request $request, $id)
    {
        $product1 = Product1::find($id);
        $product1->update($request->all());
        return redirect('/products1');
    }
    public function destroy($id)
    {
        $product1 = Product1::find($id);
        $product1->delete();
        return redirect('/products1');
    }
}
