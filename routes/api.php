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

//VIAGENS
Route::get('/viagens', 'ViagemController@index')->name('viagens.index');
Route::get('/viagens/{id}', 'ViagemController@show')->name('viagens.show');
//MOTORISTAS
Route::get('/motoristas', 'MotoristaController@index')->name('motorista.index');
//CAMINHÕES
Route::get('/caminhoes', 'CaminhaoController@index')->name('caminhao.index');