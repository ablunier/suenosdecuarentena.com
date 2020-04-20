<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [
    'as' => 'homepage',
    'uses' => 'MainController@homepage'
]);

Route::get(LaravelLocalization::transRoute('routes.dreams.search'), [
    'as' => 'dreams.search',
    'uses' => 'DreamsController@search'
]);

Route::get('/random', [
    'as' => 'dreams.random',
    'uses' => 'DreamsController@random'
]);

Route::get(LaravelLocalization::transRoute('routes.dreams.show'), [
    'as' => 'dreams.show',
    'uses' => 'DreamsController@show'
]);

Route::get(LaravelLocalization::transRoute('routes.dreams.create'), [
    'as' => 'dreams.create',
    'uses' => 'DreamsController@create'
]);

Route::post(LaravelLocalization::transRoute('routes.dreams.post'), [
    'as' => 'dreams.post',
    'uses' => 'DreamsController@post'
]);

Route::get(LaravelLocalization::transRoute('routes.dreams.sent'), [
    'as' => 'dreams.sent',
    'uses' => 'DreamsController@sent'
]);

Route::get(LaravelLocalization::transRoute('routes.about'), [
    'as' => 'about',
    'uses' => 'MainController@about'
]);
