<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home', 'Home::index');
$routes->get('/Home/index', 'Home::index');

$routes->get('/Dashboard', 'Dashboard::index');

$routes->get('/Login', 'Login::index');
$routes->get('/Login/index', 'Login::index');

// $routes->get('/login', 'LoginController::index');
$routes->post('/login/verification', 'Login::verification');
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/forgotpassword', 'AuthController::index');

$routes->get('/logout', 'Login::index');


// $routes->get('/auth/reset-password/(:any)', 'AuthController::resetPassword/$1');
$routes->get('/auth/forgot-password', 'AuthController::index'); // Show forgot password form
$routes->post('/auth/processforgotpassword', 'AuthController::processForgotPassword'); // Handle email submission
$routes->get('/auth/reset-password/(:any)', 'AuthController::resetPassword/$1'); // Show reset password form
$routes->post('/auth/update-password', 'AuthController::updatePassword'); // Handle password update

// $routes->get('reset-password', 'ResetPasswordController::request');
//  $routes->post('reset-password/sendToken', 'ResetPasswordController::sendToken');
// $routes->get('reset-password/(:any)', 'ResetPasswordController::reset/$1');
// $routes->post('reset-password/update', 'ResetPasswordController::update');

$routes->get('/employee', 'EmployeeController::index');
$routes->get('/employee/create', 'EmployeeController::create');
$routes->post('/employee/store', 'EmployeeController::store');
$routes->get('/employee/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('/employee/update/(:num)', 'EmployeeController::update/$1');
$routes->get('/employee/delete/(:num)', 'EmployeeController::delete/$1');
$routes->get('/dashboard', 'EmployeeController::employee');


