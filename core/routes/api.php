<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('roles', 'RoleController@index');
Route::get('roles/{role}', 'RoleController@show');
Route::post('roles', 'RoleController@store');
Route::put('roles/{role}', 'RoleController@update');
Route::delete('roles/{role}', 'RoleController@delete');