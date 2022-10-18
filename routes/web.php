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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api'], function ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
});
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function ($router) {

    //Lihat Data Kampus
    $router->get('kampus', 'KampusController@index');
    //Cari Kampus
    $router->get('cari-kampus/{data}', 'KampusController@cariKampus');
    
    //Lihat Mengikuti Kampus
    $router->get('mengikuti-kampus', 'FollowKampusController@index');
    //Mengikuti Kampus
    $router->post('mengikuti-kampus/{data}', 'FollowKampusController@store');


    //Lihat Jurusan
    $router->get('{data}/jurusan', 'JurusanController@index');

});
