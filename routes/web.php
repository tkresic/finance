<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {
    $router->get('/analytics', ['middleware' => 'auth:read:analytics', 'uses' => 'AnalyticController@index']);

    $router->group(['prefix' => 'bills'], function () use ($router) {
        $router->get('/', 'BillController@index');
        $router->post('/', 'BillController@create');
        $router->put('/{id}', 'BillController@update');
    });

    $router->group(['prefix' => 'shifts'], function () use ($router) {
        $router->get('/', 'ShiftController@index');
        $router->post('/', 'ShiftController@create');
        $router->get('/latest', 'ShiftController@latest');
        $router->put('/{id}', 'ShiftController@update');
    });

    $router->group(['prefix' => 'payment-methods'], function () use ($router) {
        $router->get('/', 'PaymentMethodController@index');
        $router->put('/{id}', 'PaymentMethodController@update');
    });

    $router->group(['prefix' => 'taxes'], function () use ($router) {
        $router->get('/', 'TaxController@index');
        $router->post('/', 'TaxController@create');
        $router->put('/{id}', 'TaxController@update');
    });
});
