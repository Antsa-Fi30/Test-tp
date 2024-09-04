<?php

use App\Controllers\BookController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Auth
$routes->get('/login', 'AuthController::login');
$routes->get('/signin', 'AuthController::signin');
$routes->get('/', 'AuthController::indexWelcome');
$routes->post('auth/save', 'AuthController::save');
$routes->post('auth/authenticate', 'AuthController::auth');
$routes->get('auth/logout', 'AuthController::logout');

/**
 * Books'routes CRUD
 */
$routes->get('/books', "BookController::index");

/**
 * Author'routes CRUD
 */
$routes->get('/author', "AuthorController::index");

/**
 * Cart'routes CRUD
 */
$routes->get('/cart', "CartController::index");
