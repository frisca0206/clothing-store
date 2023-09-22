<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return view('landing-page');
});


$routes->get('/home', 'HomeController::index',['as' => 'home']);
$routes->get('/login', 'LoginController::index',['as' => 'login']);
// => default controller
$routes->get('dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/bhn_baju', 'Bhn_BajuController::index',['as' => 'bhn_baju']);
$routes->get('/bhn_baju/edit/(:num)', 'Bhn_BajuController::edit/$1',['as' => 'bhn_baju-edit']);
$routes->get('/bhn_baju/delete/(:num)', 'Bhn_BajuController::delete/$1',['as' => 'bhn_baju-delete']);
$routes->get('/bhn_baju/create', 'Bhn_BajuController::create',['as' => 'bhn_baju-create']);
$routes->post('/bhn_baju/store', 'Bhn_BajuController::store',['as' => 'bhn_baju-store']);
$routes->post('/bhn_baju/update', 'Bhn_BajuController::update',['as' => 'bhn_baju-update']);


$routes->get('/merek', 'MerekController::index',['as' => 'merek']);
$routes->get('/merek/edit/(:num)', 'MerekController::edit/$1',['as' => 'merek-edit']);
$routes->get('/merek/delete/(:num)', 'MerekController::delete/$1',['as' => 'merek-delete']);
$routes->get('/merek/create', 'MerekController::create',['as' => 'merek-create']);
$routes->post('/merek/store', 'MerekController::store',['as' => 'merek-store']);
$routes->post('/merek/update', 'MerekController::update',['as' => 'merek-update']);


$routes->get('/baju', 'BajuController::index',['as' => 'baju']);
$routes->get('/baju/edit/(:num)', 'BajuController::edit/$1',['as' => 'baju-edit']);
$routes->get('/baju/delete/(:num)', 'BajuController::delete/$1',['as' => 'baju-delete']);
$routes->get('/baju/create', 'BajuController::create',['as' => 'baju-create']);
$routes->post('/baju/store', 'BajuController::store',['as' => 'baju-store']);
$routes->post('/baju/update', 'BajuController::update',['as' => 'baju-update']);


$routes->get('/bhn_celana', 'Bhn_CelanaController::index',['as' => 'bhn_celana']);
$routes->get('/bhn_celana/edit/(:num)', 'Bhn_CelanaController::edit/$1',['as' => 'bhn_celana-edit']);
$routes->get('/bhn_celana/delete/(:num)', 'Bhn_CelanaController::delete/$1',['as' => 'bhn_celana-delete']);
$routes->get('/bhn_celana/create', 'Bhn_CelanaController::create',['as' => 'bhn_celana-create']);
$routes->post('/bhn_celana/store', 'Bhn_CelanaController::store',['as' => 'bhn_celana-store']);
$routes->post('/bhn_celana/update', 'Bhn_CelanaController::update',['as' => 'bhn_celana-update']);


$routes->get('/celana', 'CelanaController::index',['as' => 'celana']);
$routes->get('/celana/edit/(:num)', 'CelanaController::edit/$1',['as' => 'celana-edit']);
$routes->get('/celana/delete/(:num)', 'CelanaController::delete/$1',['as' => 'celana-delete']);
$routes->get('/celana/create', 'CelanaController::create',['as' => 'celana-create']);
$routes->post('/celana/store', 'CelanaController::store',['as' => 'celana-store']);
$routes->post('/celana/update', 'CelanaController::update',['as' => 'celana-update']);


$routes->get('/gudang', 'GudangController::index',['as' => 'gudang']);
$routes->get('/gudang/edit/(:num)', 'GudangController::edit/$1',['as' => 'gudang-edit']);
$routes->get('/gudang/delete/(:num)', 'GudangController::delete/$1',['as' => 'gudang-delete']);
$routes->get('/gudang/create', 'GudangController::create',['as' => 'gudang-create']);
$routes->post('/gudang/store', 'GudangController::store',['as' => 'gudang-store']);
$routes->post('/gudang/update', 'GudangController::update',['as' => 'gudang-update']);


$routes->get('/stok_baju', 'Stok_BajuController::index',['as' => 'stok_baju']);
$routes->get('/stok_baju/edit/(:num)', 'Stok_BajuController::edit/$1',['as' => 'stok_baju-edit']);
$routes->get('/stok_baju/delete/(:num)', 'Stok_BajuController::delete/$1',['as' => 'stok_baju-delete']);
$routes->get('/stok_baju/create', 'Stok_BajuController::create',['as' => 'stok_baju-create']);
$routes->post('/stok_baju/store', 'Stok_BajuController::store',['as' => 'stok_baju-store']);
$routes->post('/stok_baju/update', 'Stok_BajuController::update',['as' => 'stok_baju-update']);


$routes->get('/stok_celana', 'Stok_CelanaController::index',['as' => 'stok_celana']);
$routes->get('/stok_celana/edit/(:num)', 'Stok_CelanaController::edit/$1',['as' => 'stok_celana-edit']);
$routes->get('/stok_celana/delete/(:num)', 'Stok_CelanaController::delete/$1',['as' => 'stok_celana-delete']);
$routes->get('/stok_celana/create', 'Stok_CelanaController::create',['as' => 'stok_celana-create']);
$routes->post('/stok_celana/store', 'Stok_CelanaController::store',['as' => 'stok_celana-store']);
$routes->post('/stok_celana/update', 'Stok_CelanaController::update',['as' => 'stok_celana-update']);


$routes->get('/pnjln_baju', 'PnjlnBajuController::index',['as' => 'pnjln_baju']);
$routes->get('/pnjln_baju/edit/(:num)', 'PnjlnBajuController::edit/$1',['as' => 'pnjln_baju-edit']);
$routes->get('/pnjln_baju/delete/(:num)', 'PnjlnBajuController::delete/$1',['as' => 'pnjln_baju-delete']);
$routes->get('/pnjln_baju/create', 'PnjlnBajuController::create',['as' => 'pnjln_baju-create']);
$routes->post('/pnjln_baju/store', 'PnjlnBajuController::store',['as' => 'pnjln_baju-store']);
$routes->post('/pnjln_baju/update', 'PnjlnBajuController::update',['as' => 'pnjln_baju-update']);


$routes->get('/pnjln_celana', 'PnjlnCelanaController::index',['as' => 'pnjln_celana']);
$routes->get('/pnjln_celana/edit/(:num)', 'PnjlnCelanaController::edit/$1',['as' => 'pnjln_celana-edit']);
$routes->get('/pnjln_celana/delete/(:num)', 'PnjlnCelanaController::delete/$1',['as' => 'pnjln_celana-delete']);
$routes->get('/pnjln_celana/create', 'PnjlnCelanaController::create',['as' => 'pnjln_celana-create']);
$routes->post('/pnjln_celana/store', 'PnjlnCelanaController::store',['as' => 'pnjln_celana-store']);
$routes->post('/pnjln_celana/update', 'PnjlnCelanaController::update',['as' => 'pnjln_celana-update']);


$routes->get('/ukuran_sepatu', 'UkuranSepatuController::index',['as' => 'ukuran_sepatu']);
$routes->get('/ukuran_sepatu/edit/(:num)', 'UkuranSepatuController::edit/$1',['as' => 'ukuran_sepatu-edit']);
$routes->get('/ukuran_sepatu/delete/(:num)', 'UkuranSepatuController::delete/$1',['as' => 'ukuran_sepatu-delete']);
$routes->get('/ukuran_sepatu/create', 'UkuranSepatuController::create',['as' => 'ukuran_sepatu-create']);
$routes->post('/ukuran_sepatu/store', 'UkuranSepatuController::store',['as' => 'ukuran_sepatu-store']);
$routes->post('/ukuran_sepatu/update', 'UkuranSepatuController::update',['as' => 'ukuran_sepatu-update']);


$routes->get('/sepatu', 'SepatuController::index',['as' => 'sepatu']);
$routes->get('/sepatu/edit/(:num)', 'SepatuController::edit/$1',['as' => 'sepatu-edit']);
$routes->get('/sepatu/delete/(:num)', 'SepatuController::delete/$1',['as' => 'sepatu-delete']);
$routes->get('/sepatu/create', 'SepatuController::create',['as' => 'sepatu-create']);
$routes->post('/sepatu/store', 'SepatuController::store',['as' => 'sepatu-store']);
$routes->post('/sepatu/update', 'SepatuController::update',['as' => 'sepatu-update']);


$routes->get('/stok_sepatu', 'StokSepatuController::index',['as'=> 'stok_sepatu']);
$routes->get('/stok_sepatu/edit/(:num)', 'StokSepatuController::edit/$1',['as' => 'stok_sepatu-edit']);
$routes->get('/stok_sepatu/delete/(:num)', 'StokSepatuController::delete/$1',['as' => 'stok_sepatu-delete']);
$routes->get('/stok_sepatu/create', 'StokSepatuController::create',['as' => 'stok_sepatu-create']);
$routes->post('/stok_sepatu/store', 'StokSepatuController::store',['as' => 'stok_sepatu-store']);
$routes->post('/stok_sepatu/update', 'StokSepatuController::update',['as' => 'stok_sepatu-update']);