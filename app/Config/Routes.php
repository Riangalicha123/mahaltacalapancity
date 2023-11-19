<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'GuestController::home');
$routes->get('/about', 'GuestController::about');
$routes->get('/room', 'GuestController::room');
$routes->get('/gallert', 'GuestController::gallery');
$routes->get('/blog', 'GuestController::blog');
$routes->get('/contact', 'GuestController::contact');



$routes->get('/login', 'UserController::loginregister');
$routes->post('/registerAcc', 'UserController::register');
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->get('/logout', 'UserController::logout');
