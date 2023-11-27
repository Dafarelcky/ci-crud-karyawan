<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/disc', 'Dashboard::disc');
$routes->get('/dashboard/detail/bayar/payment/(:num)', 'Dashboard::payment/$1');
$routes->get('/dashboard/detail/(:string)', 'Dashboard::detail/$1');
$routes->get('/dashboard/detail/bayar/(:num)', 'Dashboard::bayar/$1');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->get('/admin/edit/(:string)', 'Admin::edit/$1');
$routes->get('/admin/delete/(:string)', 'Admin::delete/$1');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
