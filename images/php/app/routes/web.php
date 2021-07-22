<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use Illuminate\Http\Response;

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

$router->get('/', function () use ($router) {
    return "lampu";
});

/**
 * This method will return user detail for specified Id
 * @param id  an integer of user id
 * @return user detail in user detail in json format.
 */
$router->get('/users/{id}', 'ExampleController@getUser');