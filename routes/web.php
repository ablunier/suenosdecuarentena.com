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

Route::get('/item/nr-{id}', [
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

Route::get('/acerca-de', [
    'as' => 'about',
    'uses' => 'MainController@about'
]);

Route::get('/colofon', [
    'as' => 'colophon',
    'uses' => 'MainController@colophon'
]);
