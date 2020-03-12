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

Route::delete('materials/delete/{id}','MaterialController@delete');

Route::get('users/get','UserController@get');

Route::post('users/update/{id}','UserController@update');

Route::post('users/create','UserController@create');

Route::delete('users/delete/{id}','UserController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
