<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return '<h2>' . env('APP_NAME', 'Finance Microservice') . '</h2>'
        . 'v' . env('APP_VERSION', '0.1.0');
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'bills'], function () use ($router) {
        $router->get('/', 'BillController@index');
    });

    $router->group(['prefix' => 'shifts'], function () use ($router) {
        $router->get('/', 'ShiftController@index');
    });

    $router->group(['prefix' => 'paymentMethods'], function () use ($router) {
        $router->get('/', 'PaymentMethodController@index');
    });

});
