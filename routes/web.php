<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'bills'], function () use ($router) {
        $router->get('/', 'BillController@index');
    });

    $router->group(['prefix' => 'shifts'], function () use ($router) {
        $router->get('/', 'ShiftController@index');
    });

    $router->group(['prefix' => 'payment-methods'], function () use ($router) {
        $router->get('/', 'PaymentMethodController@index');
    });
});
