<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboard', 'DashboardController::index');

$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
});

# $routes->get('/hello/(:any)', 'HelloController::test/$1');
