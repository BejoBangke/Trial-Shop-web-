<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->post('/logout', 'Login::logout');
//pnerima
$routes->get('/penerima', 'Penerima::index');
//Indonesia
$routes->get('/indo', 'Indo::index');
$routes->get('/indo/add', 'Indo::add');
$routes->post('/indo/save', 'Indo::save');
$routes->get('/indo/edit/(:any)', 'Indo::edit/$1');
$routes->post('/indo/update/(:any)', 'Indo::saveEdit/$1');
$routes->get('/indo/delete/(:any)', 'Indo::delete/$1');
//Thailand
$routes->get('/thai', 'Thai::index');
$routes->get('/thai/add', 'Thai::add');
$routes->post('/thai/save', 'Thai::save');
$routes->get('/thai/edit/(:any)', 'Thai::edit/$1');
$routes->post('/thai/update/(:any)', 'Thai::saveEdit/$1');
$routes->get('/thai/delete/(:any)', 'Thai::delete/$1');
//Vietnam
$routes->get('/viet', 'Viet::index');
$routes->get('/viet/add', 'Viet::add');
$routes->post('/viet/save', 'Viet::save');
$routes->get('/viet/edit/(:any)', 'Viet::edit/$1');
$routes->post('/viet/update/(:any)', 'Viet::saveEdit/$1');
$routes->get('/viet/delete/(:any)', 'Viet::delete/$1');
//Singapura
$routes->get('/sing', 'Sing::index');
$routes->get('/sing/add', 'Sing::add');
$routes->post('/sing/save', 'Sing::save');
$routes->get('/sing/edit/(:any)', 'Sing::edit/$1');
$routes->post('/sing/update/(:any)', 'Sing::saveEdit/$1');
$routes->get('/sing/delete/(:any)', 'Sing::delete/$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
