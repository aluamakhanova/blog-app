<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\NewsController@index');
Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show');
Route::post('/news/create', 'App\Http\Controllers\NewsController@create');
Route::post('/news/update/{id}', 'App\Http\Controllers\NewsController@update');
Route::delete('/news/delete/{id}', 'App\Http\Controllers\NewsController@delete');

?>