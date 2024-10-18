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
$routes->get('praktik', 'Home::praktik');
$routes->get('k3lh', 'Home::k3lh');
$routes->get('logout', 'Home::logout');
$routes->get('bios', 'Home::bios');
$routes->get('instalasios', 'Home::instalasios');
$routes->get('instalasidriver', 'Home::instalasidriver');
$routes->get('instalasisoftware', 'Home::instalasisoftware');
$routes->get('perakitankomputer', 'Home::perakitankomputer');
$routes->get('perawatanhardware', 'Home::perawatanhardware');
$routes->get('analisissoftware', 'Home::analisissoftware');
$routes->get('analisishardware', 'Home::analisishardware');
$routes->get('tentangkjd', 'Home::tentangkjd');
$routes->post('login/submit', 'Home::loginsubmit');
$routes->post('admingenerate/submit', 'Home::tambahadmin');
$routes->post('siswa/tambah', 'Home::tambahsiswa');
$routes->post('siswa/edit', 'Home::editsiswa');
$routes->post('upload', 'Home::upload');
$routes->get('materi', 'Home::materi');
$routes->get('login', 'Home::login');
$routes->get('admin', 'Home::admin');
$routes->get('petunjuk', 'Home::petunjuk');
$routes->get('ambil_data_siswa/(:num)', 'Home::ambil_data_siswa/$1');
$routes->get('delete_data_siswa/(:num)', 'Home::delete_data_siswa/$1');
$routes->get('delete_materi/(:num)', 'Home::delete_materi/$1');
$routes->post('update_data_siswa', 'Home::update_data_siswa');
$routes->get('tes1', 'Home::tes1');
$routes->get('tes2', 'Home::tes2');
$routes->get('nilai', 'Home::nilai');
$routes->get('bantuan', 'Home::bantuan');
$routes->get('materiguru', 'Home::materiguru');
$routes->get('startpraktik', 'Home::mulaipraktik');
$routes->setDefaultMethod('index');
$routes->get('admin-datasiswa', 'Home::admin_datasiswa');
$routes->get('createadmin', 'Home::createadmin');
$routes->get('admin-materitambahan', 'Home::admin_materitambahan');
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
$routes->get('/', 'Home::index');

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
