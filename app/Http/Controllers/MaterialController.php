<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function get(){
        $material = Material::all();
        return response()->json(['data'=>$material],200, [], JSON_NUMERIC_CHECK);
    }
    public function create(Request $request){
        $material = Material::create([
            'libelle'=>request('libelle')
        ]);
        return response()->json(['data'=>$material],200, [], JSON_NUMERIC_CHECK);
    }
    public function update(Request $request,$id){
        $material = Material::findOrFail($id);
        $material->update($request->all());
        return response()->json(['data'=>$material],200, [], JSON_NUMERIC_CHECK);
    }
}
