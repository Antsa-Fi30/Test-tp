<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RoutesController::login');
$routes->get('/signin', 'RoutesController::signin');
$routes->get('/home', 'RoutesController::home');
$routes->get('/user', 'UserController::index');
$routes->post('/addUser', 'UserController::create');
