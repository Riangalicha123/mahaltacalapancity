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

$routes->get('/admin-dashboard', 'AdminController::dashboard');

$routes->get('/staff-hotel', 'StaffController::home');
$routes->get('/staff-hotelreservation', 'StaffController::reservation');
$routes->post('/addReservation', 'StaffController::addReservation');
$routes->get('/staff-hotelroom', 'StaffController::room');
$routes->post('/addRoom', 'StaffController::addRoom');
$routes->get('/deleteRoom/(:any)', 'StaffController::deleteRoom/$1');
$routes->get('/editRoom/(:any)', 'StaffController::editRoom/$1');
$routes->post('/editRoom/updateRoom', 'StaffController::updateRoom');

$routes->get('feedback', 'AdminController::index');
$routes->post('feedback/submitFeedback', 'AdminController::submitFeedback');
$routes->get('contact', 'AdminController::index');
$routes->post('contact/submitForm', 'AdminController::submitForm');

