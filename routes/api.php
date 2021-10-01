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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vendas','App\Http\Controllers\API\vendasController@index')
;
Route::get('vendas/{vendas}','App\Http\Controllers\API\vendasController@show')
;
Route::post('vendas','App\Http\Controllers\API\vendasController@store')
;
Route::delete('vendas/{vendas}','App\Http\Controllers\API\vendasController@destroy')
;
Route::put('vendas/{vendas}','App\Http\Controllers\API\vendasController@update')
;
