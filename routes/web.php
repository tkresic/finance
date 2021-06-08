<?php

use Laravel\Lumen\Routing\Router;

/** @var Router $router */

$router->get('/', function () use ($router) {
    return view('index');
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'bills'], function () use ($router) {
        $router->get('/', 'BillController@index');
        $router->post('/', 'BillController@create');
        $router->get('/{id}', 'BillController@read');
        $router->put('/{id}', 'BillController@update');
    });

    $router->group(['prefix' => 'shifts'], function () use ($router) {
        $router->get('/', 'ShiftController@index');
        $router->post('/', 'ShiftController@create');
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
        $router->delete('/{id}', 'TaxController@delete');
    });
});
