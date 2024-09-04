<?php

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

//Books
$routes->get('/books', 'BookController::index');
$routes->get('/books/create', 'BookController::create');
$routes->post('/books/savecreate', 'BookController::store');
$routes->get('/books/edit/(:num)', 'BookController::edit/$1');
$routes->put('/books/update/(:num)', 'BookController::update/$1');
$routes->delete('/books/delete/(:num)', 'BookController::delete/$1');

//Authors
$routes->get('/authors', 'AuthorController::index');
$routes->get('/authors/create', 'AuthorController::create');
$routes->post('/authors/create', 'AuthorController::store');

//Cart
$routes->get('/Cart', 'BorrowingController::index');
$routes->get('/Cart/create', 'BorrowingController::create');
$routes->post('/Cart/create', 'BorrowingController::store');
$routes->get('/Cart/return/(:num)', 'BorrowingController::return/$1');
