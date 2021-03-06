<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Register::index');
$routes->post('/signup', 'Register::save');
$routes->get('/signin', 'Signin::index');
$routes->post('/signin', 'Signin::login');
$routes->get('/profile', 'Profile::index', ['filter' => 'authGuard']);
$routes->get('/consultation-request', 'CreateConsultationRequest::index', ['filter' => 'authGuard']);
$routes->post('/consultation-request', 'CreateConsultationRequest::submit', ['filter' => 'authGuard']);
$routes->get('/consultation-request/(:num)', 'GetConsultationRequest::get/$1', ['filter' => 'authGuard']);

$routes->get('/consultation-requests', 'GetConsultationRequests::index', ['filter' => 'authGuard']);

$routes->get('/consultation-request/(:num)/edit', 'UpdateConsultationRequest::get/$1', ['filter' => 'authGuard']);
$routes->post('/consultation-request/(:num)/edit', 'UpdateConsultationRequest::submit/$1', ['filter' => 'authGuard']);

$routes->get('/consultation-request/(:num)/review', 'ReviewConsultationRequest::get/$1', ['filter' => 'authGuard']);
$routes->post('/consultation-request/(:num)/review', 'ReviewConsultationRequest::submit/$1', ['filter' => 'authGuard']);

$routes->get('/consultation-report/(:num)', 'GetConsultationReport::get/$1', ['filter' => 'authGuard']);

$routes->get('/about', 'Contact::index');
$routes->post('/about', 'Contact::submit');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
