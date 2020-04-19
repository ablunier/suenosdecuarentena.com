<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [
    'as' => 'homepage',
    'uses' => 'MainController@homepage'
]);

Route::get('/buscar', [
    'as' => 'dreams.search',
    'uses' => 'DreamsController@search'
]);

Route::get('/random', [
    'as' => 'dreams.random',
    'uses' => 'DreamsController@random'
]);

Route::get('/sueno/nr-{id}', [
    'as' => 'dreams.show',
    'uses' => 'DreamsController@show'
]);

Route::get('/enviar', [
    'as' => 'dreams.create',
    'uses' => 'DreamsController@create'
]);

Route::post('/enviar/validar', [
    'as' => 'dreams.post',
    'uses' => 'DreamsController@post'
]);

Route::get('/enviar/gracias', [
    'as' => 'dreams.sent',
    'uses' => 'DreamsController@sent'
]);

Route::get('/acerca-de', [
    'as' => 'about',
    'uses' => 'MainController@about'
]);

Route::get('/legal', [
    'as' => 'legal',
    'uses' => 'MainController@legal'
]);
