<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/profile', 'Home::profileAdmin');
$routes->get('/laporan', 'LaporanController::index');
$routes->get('/users', 'UserController::index');
$routes->get('/tumbal', 'UserController::tumbal');
