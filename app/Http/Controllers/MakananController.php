<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index () {
        $makanans = Makanan::all(); //nama table + model

        return view('makanans.index',compact(['makanans']));
    }
    public function create(){
        return view('makanans.create');
    }
    public function store(Request $request){
        Makanan::create($request->all());
        return redirect('/makanan');
    }
    public function edit($id){
        $makanan = Makanan::find($id);
        return view('makanan.edit',compact(['makanan']));
    }
    public function update(Request $request,$id){
        $makanan = Makanan::find($id);
        $makanan->update($request->all());
        return redirect('/makanan');
    }
    public function destroy($id){
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect('/makanan');
    }
}
