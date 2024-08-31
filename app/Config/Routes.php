<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'UserController::home');
$routes->get('/', 'UserController::login');
$routes->get('/user', 'UserController::index');
$routes->post('/addUser', 'UserController::create');
