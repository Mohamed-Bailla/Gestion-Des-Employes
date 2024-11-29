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

$routes->get('/forgotpassword', 'ForgotPassword::index');

$routes->get('/logout', 'Login::index');


$routes->get('/auth/reset-password/(:any)', 'AuthController::resetPassword/$1');
$routes->post('/auth/reset-password', 'AuthController::updatePassword');
$routes->post('/auth/process-forgot-password', 'AuthController::processForgotPassword');

$routes->get('reset-password', 'ResetPasswordController::request');
$routes->post('reset-password/sendToken', 'ResetPasswordController::sendToken');
$routes->get('reset-password/(:any)', 'ResetPasswordController::reset/$1');
$routes->post('reset-password/update', 'ResetPasswordController::update');

