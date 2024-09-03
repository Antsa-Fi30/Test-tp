<?php

use App\Controllers\RoutesController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'RoutesController::login');
$routes->get('/signin', 'RoutesController::signin');
$routes->get('/', 'RoutesController::home');
$routes->post('/save', 'RoutesController::store');
