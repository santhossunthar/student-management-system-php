<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->group('auth', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('login', 'AuthController::login');
    $routes->get('register', 'AuthController::register');
    $routes->get('logout', 'AuthController::logout');
});

# $routes->get('/hello/(:any)', 'HelloController::test/$1');
