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
$routes->get('/dashboardUser', 'DashboardUserController::index');
$routes->get('/tugas', 'TugasController::index');
$routes->get('/rekap', 'RekapUserController::index');
$routes->get('/profileUser', 'profileController::profileUser');
$routes->get('/hapus/(:any)', 'TugasController::hapus/$1');
$routes->get('/editUser/(:any)', 'TugasController::edit/$1');
$routes->post('/simpan', 'TugasController::simpanlaporan');