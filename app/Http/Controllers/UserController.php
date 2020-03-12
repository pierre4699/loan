<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(){
        $user = User::all();
        return response()->json($user,200, [], JSON_NUMERIC_CHECK);
    }
    public function create(Request $request){
        $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>request('password')
        ]);
        return response()->json(['data'=>$user],200, [], JSON_NUMERIC_CHECK);
    }
    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['data'=>$user],200, [], JSON_NUMERIC_CHECK);
    }
    public function delete(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null,204);
    }
}
