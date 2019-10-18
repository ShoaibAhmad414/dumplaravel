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

Route::post('/student','ControllerApi@create');
Route::get('/student','ControllerApi@show');
Route::get('/student/{id}','ControllerApi@showid');
Route::put('/studentupdate/{id}','ControllerApi@UpdateByid');
Route::delete('/StudentDelete/{id}','ControllerApi@deleteByid');

