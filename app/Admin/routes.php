<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('/users', UserController::class);
    $router->resource('/contacts', ContactController::class);
    $router->resource('/items', ItemController::class);
    $router->resource('/orders', OrderController::class);

});
