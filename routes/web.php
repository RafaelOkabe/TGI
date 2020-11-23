<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RetornaDadosController@index')->name('index');

Route::post('/solitacaoManutencao', 'SolicitarManutencaoController@update')->name('solitacaoManutencao.update');

Route::get('/restaurante', 'RestauranteController@index')->name('restaurante');
