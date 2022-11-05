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
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/ci', 'Home::index');
$routes->add('/inventor', 'Base\Home::barang');
$routes->add('/add', 'Base\Home::add_stok');
$routes->post('/delete', 'Base\Home::delete_brg');
$routes->add('/delete/stock/(:num)', 'Base\Home::delete/$1');
$routes->post('/add/barang/baru', 'Base\Home::add_barang_baru');
$routes->add('/edit/stok/(:num)', 'Base\Home::update_stok_brg/$1');
$routes->add('/inventor/pengiriman', 'Base\Home::pengiriman');
$routes->add('/kirim/barang', 'Base\Home::kirim');
$routes->add('/status/pengiriman/(:num)', 'Base\Home::status_pengiriman/$1');
$routes->add('/inventor/catatan/laporan', 'Base\Home::catatan_laporan');
$routes->add('/inventor/barang/keluar', 'Base\Home::barang_keluar');


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
