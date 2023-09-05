<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
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