<?php

/** @var Router $router */

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

use Laravel\Lumen\Routing\Router;

$router->post('/login', 'LoginController@login');

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/cursos', 'CursosController@index');
    $router->patch('/cursos/{courseId}', 'CursosController@assistir');
    $router->patch('/cursos/{courseId}', 'CursosController@assistir');
});

