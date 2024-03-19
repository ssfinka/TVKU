<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/profile', 'Home::profileAdmin');
$routes->get('/laporan', 'LaporanController::index');
$routes->get('/users', 'UserController::index');
$routes->get('/setting', 'ProfileAdminController::index');
$routes->get('/hapus/(:any)', 'LaporanController::hapus/$1');
$routes->get('/hapususers/(:any)', 'UserController::hapus/$1');
$routes->get('/editlaporan/(:any)', 'LaporanController::edit/$1');
$routes->get('/editlaporan', 'LaporanController::edit');
$routes->post('/tambahusers', 'UserController::tambahusers');
$routes->post('/savelaporan', 'LaporanController::save');
$routes->post('/postlogin', 'AuthController::postlogin');
$routes->post('/register', 'AuthController::register');

// user
// $routes->get('/', 'PunyaUserController::index');
$routes->get('/dashboard-user', 'PunyaUserController::index');
$routes->get('/tugas', 'PunyaUserController::tugas');
$routes->get('/rekap', 'PunyaUserController::rekap');
$routes->get('/profileUser', 'PunyaUserController::profileUser');