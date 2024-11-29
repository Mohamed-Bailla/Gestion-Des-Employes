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
