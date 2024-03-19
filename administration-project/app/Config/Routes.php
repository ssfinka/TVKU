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
$routes->get('/setting', 'ProfileAdminController::index');
$routes->get('/hapus/(:any)', 'LaporanController::hapus/$1');
$routes->get('/hapususers/(:any)', 'UserController::hapus/$1');
$routes->get('/editlaporan', 'LaporanController::edit');
$routes->post('/tambahusers', 'UserController::tambahusers');
$routes->post('/savelaporan', 'LaporanController::save');

// user
$routes->get('/', 'PunyaUserController::index');
$routes->get('/dashboard', 'PunyaUserController::index');
$routes->get('/tugas', 'PunyaUserController::tugas');
$routes->get('/rekap', 'PunyaUserController::rekap');
$routes->get('/profile', 'PunyaUserController::profileUser');