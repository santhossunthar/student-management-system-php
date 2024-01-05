<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/hello', 'HelloController::index');
$routes->get('/hello/(:any)', 'HelloController::test/$1');
