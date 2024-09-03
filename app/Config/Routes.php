<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AuthController::login');
$routes->get('/signin', 'AuthController::signin');
$routes->get('/', 'AuthController::indexWelcome');
$routes->post('auth/save', 'AuthController::save');
$routes->post('auth/authenticate', 'AuthController::auth');
$routes->get('auth/logout', 'AuthController::logout');
