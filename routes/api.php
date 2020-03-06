<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('materials/get','MaterialController@get');

Route::post('materials/update/{id}','MaterialController@update');

Route::post('materials/create','MaterialController@create');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
