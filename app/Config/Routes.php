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

/**
 * Books'routes CRUD
 */
$routes->get('/books', "BookController::index");
$routes->get('/books/create', "BookController::create");
$routes->post('/books/create/save', "BookController::store");
$routes->get('/books/edit/(:num)', "BookController::edit/$1");
$routes->post('/books/update/(:num)', "BookController::update/$1");
$routes->get('/books/delete/(:num)', "BookController::delete/$1");
$routes->get('/books/search', 'BookController::search');


/**
 * Author'routes CRUD
 */
$routes->get('/authors', "AuthorController::index");
$routes->get('/authors/create', "AuthorController::create");
$routes->post('/authors/create/save', "AuthorController::store");
$routes->get('/authors/edit/(:num)', "AuthorController::edit/$1");
$routes->post('/authors/update/(:num)', "AuthorController::update/$1");
$routes->get('/authors/delete/(:num)', "AuthorController::delete/$1");

// Borrowing
$routes->get('/books/lend/(:num)', 'BorrowController::addToCart/$1');
$routes->get('/books/cancel/(:num)', 'BorrowController::deleteToCart/$1');

//Cart lists
$routes->get('/borrowedList', "BorrowController::index");
$routes->get('/confirmBorrow/(:num)', "BorrowController::confirm/$1");
$routes->post('/Addborrow/(:num)', "BorrowController::addToCart/$1");
$routes->get('/editconfirm/(:num)', "BorrowController::editconfirm/$1");
$routes->post('/editupdate/(:num)', "BorrowController::editupdate/$1");
$routes->get('/cancelborrow/(:num)', "BorrowController::deleteToCart/$1");
