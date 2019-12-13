<?php

Route::get('/', 'HomeController@index')->name('home');
//VIAGENS
Route::get('/viagens', function() {return view('viagens');})->name('viagens');
Route::get('/viagens/criar', 'ViagemController@create')->name('viagens.criar');
Route::get('/viagens/{id}/finalizar', 'ViagemController@edit')->name('viagens.finalizar');
Route::post('/viagens', 'ViagemController@store')->name('viagens.cadastrar');
Route::post('/viagens/{id}', 'ViagemController@update')->name('viagens.atualizar');
Route::delete('/viagens/{id}', 'ViagemController@destroy')->name('viagens.deletar');
//MOTORISTAS
Route::get('/motoristas',  function() {return view('motoristas');})->name('motoristas');
Route::get('/motoristas/criar', 'MotoristaController@create')->name('motoristas.criar');
Route::get('/motoristas/{id}/editar', 'MotoristaController@edit')->name('motoristas.editar');
Route::post('/motoristas', 'MotoristaController@store')->name('motoristas.cadastrar');
Route::post('/motoristas/{id}', 'MotoristaController@update')->name('motoristas.atualizar');
Route::delete('/motoristas/{id}', 'MotoristaController@destroy')->name('motoristas.deletar');
//CAMINHÕES
Route::get('/caminhoes',  function() {return view('caminhoes'); })->name('caminhoes');
Route::get('/caminhoes/criar', 'CaminhaoController@create')->name('caminhoes.criar');
Route::get('/caminhoes/{id}/editar', 'CaminhaoController@edit')->name('caminhoes.editar');
Route::post('/caminhoes', 'CaminhaoController@store')->name('caminhoes.cadastrar');
Route::post('/caminhoes/{id}', 'CaminhaoController@update')->name('caminhoes.atualizar');
Route::delete('/caminhoes/{id}', 'CaminhaoController@destroy')->name('caminhoes.deletar');


Auth::routes();

