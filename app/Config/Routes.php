<?php

namespace Config;

use PDO;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Landing');
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

// LandingPage Route
$routes->get('/', 'Landing::index');
$routes->group('/', function ($routes) {
    // LandingPage Route
    $routes->get('anggota', 'Landing::member');
    $routes->get('gallery', 'Landing::gallery');
    $routes->get('jumat', 'Landing::jumat');
    $routes->get('komisi', 'Landing::commission');
    $routes->get('sambutan', 'Landing::greeting');
    $routes->get('tentang', 'Landing::history');

    //Route Berita dan Detail Berita
    $routes->get('berita', 'Landing::news');
    $routes->add('berita/(:any)', 'Landing::detail/$1'); 
});

$routes->group('/admin', function ($routes) {
    //Users dan Login Dashboard
    $routes->get('login', 'Admin\Login::index');
    $routes->post('login/proses', 'Admin\Login::proses');
});

// Dashboard Route
$routes->group('/admin', ['filter' => 'authGuard'], function ($routes) {

    //Route Admin Dashboard dan Profile
    $routes->add('dashboard', 'Admin::index');
    $routes->get('komentar', 'Admin::comment');

    //Users Profile dan Logout Dashboard
    $routes->add('profile', 'Admin::profile');
    $routes->post('profiles', 'Admin::photoprofile');
    $routes->post('profileword', 'Admin::passprofile');
    $routes->get('logout', 'Admin\Login::logout');

    //Route Halaman
    $routes->add('komisi', 'Admin\Commission::index');
    $routes->add('sejarah', 'Admin\History::index');
    $routes->add('sambutan', 'Admin\Greeting::index');
    $routes->add('pengaturan', 'Admin\Settings::index');

    //Route Admin Jadwal
    $routes->get('jadwal', 'Admin\Schedule::index');
    $routes->add('jadwal/(:segment)/edit', 'Admin\Schedule::edit/$1');

    //Route CRUD Admin Jumat
    $routes->get('jumat', 'Admin\Jumat::index');
    $routes->add('jumat/new', 'Admin\Jumat::create');
	$routes->add('jumat/(:segment)/edit', 'Admin\Jumat::edit/$1');
	$routes->get('jumat/(:segment)/delete', 'Admin\Jumat::delete/$1');

    //Route CRUD Admin Berita
    $routes->get('posts', 'Admin\News::index');
    $routes->add('posts/new', 'Admin\News::create');
	$routes->add('posts/(:segment)/edit', 'Admin\News::edit/$1');
    $routes->post('posts/(:segment)/imagedit', 'Admin\News::imagedit/$1');
	$routes->get('posts/(:segment)/delete', 'Admin\News::delete/$1');
    
    //Route CRUD Admin Gallery
    $routes->get('galeri', 'Admin\Gallery::index');
    $routes->add('galeri/new', 'Admin\Gallery::create');
    $routes->add('galeri/(:segment)/edit', 'Admin\Gallery::edit/$1');
    $routes->post('galeri/(:segment)/imagedit', 'Admin\Gallery::imagedit/$1');
	$routes->get('galeri/(:segment)/delete', 'Admin\Gallery::delete/$1');
    
    //Route CRUD Admin Keanggotaan
    $routes->get('keanggotaan', 'Admin\Members::index');
    $routes->add('keanggotaan/new', 'Admin\Members::create');
	$routes->add('keanggotaan/(:segment)/edit', 'Admin\Members::edit/$1');
    $routes->post('keanggotaan/(:segment)/imagedit', 'Admin\Members::imagedit/$1');
	$routes->get('keanggotaan/(:segment)/delete', 'Admin\Members::delete/$1');
    
});

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
