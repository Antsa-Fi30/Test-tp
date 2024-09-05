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
$routes->get('/books/create', "BookController::create");
$routes->post('/books/create/save', "BookController::store");
$routes->get('/books/edit/(:num)', "BookController::edit/$1");
$routes->post('/books/update/(:num)', "BookController::update/$1");
$routes->get('/books/delete/(:num)', "BookController::delete/$1");


/**
 * Author'routes CRUD
 */
$routes->get('/authors', "AuthorController::index");
$routes->get('/authors/create', "AuthorController::create");
$routes->post('/authors/create/save', "AuthorController::store");
$routes->get('/authors/edit/(:num)', "AuthorController::edit/$1");
$routes->post('/authors/update/(:num)', "AuthorController::update/$1");
$routes->get('/authors/delete/(:num)', "AuthorController::delete/$1");


/**
 * Cart'routes CRUD
 */
$routes->get('/cart', "CartController::index");
$routes->get('/cart/add/(:num)', "CartController::add/$1");
