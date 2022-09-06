<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Route;

$router->get('/',  ['uses' => 'NewsController@showAll']);

$router->get('/{id}',  ['uses' => 'NewsController@showOne']);

$router->post('/create',  ['uses' => 'NewsController@create']);

$router->post('/update/{id}',  ['uses' => 'NewsController@update']);

$router->delete('/delete/{id}',  ['uses' => 'NewsController@delete']);
