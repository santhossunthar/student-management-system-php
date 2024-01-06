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

$routes->get('/lecturers', 'DashboardController::index');
$routes->get('/courses', 'DashboardController::index');
$routes->get('/attendences', 'DashboardController::index');
$routes->get('/payments', 'DashboardController::index');

$routes->group('students', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('', 'StudentController::getAll');
    $routes->get('/get/(:any)', 'StudentController::get/$1');
    $routes->post('/add', 'StudentController::add');
    $routes->delete('/remove/(:any)', 'StudentController::delete/$1');
    $routes->put('/update/(:any)', 'StudentController::update/$1');
});

# $routes->get('/hello/(:any)', 'HelloController::test/$1');
