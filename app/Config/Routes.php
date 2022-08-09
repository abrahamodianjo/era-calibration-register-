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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// CRUD RESTful Routes for cylinder records 
$routes->get('/', 'EraCrud::index');
$routes->get('cylinder-list', 'EraCrud::index');
$routes->get('cylinder-form', 'EraCrud::create');
$routes->post('submit-form', 'EraCrud::store');
$routes->get('edit-view/(:num)', 'EraCrud::singleEra/$1');
$routes->post('update', 'EraCrud::update');
$routes->get('delete/(:num)', 'EraCrud::delete/$1');

// CRUD RESTful Routes for quality records 

$routes->get('quality-list', 'QualityCrud::index');
$routes->get('quality-form', 'QualityCrud::create');
$routes->post('submit-form-quality', 'QualityCrud::store');
$routes->get('editquality-view/(:num)', 'QualityCrud::singleQuality/$1');
$routes->post('updatequality', 'QualityCrud::update');
$routes->get('deletequality/(:num)', 'QualityCrud::delete/$1');


// CRUD RESTful Routes for design records 

$routes->get('design-list', 'DesignCrud::index');
$routes->get('design-form', 'DesignCrud::create');
$routes->post('submit-form-design', 'DesignCrud::store');
$routes->get('editdesign-view/(:num)', 'DesignCrud::singleDesign/$1');
$routes->post('updatedesign', 'DesignCrud::update');
$routes->get('deletedesign/(:num)', 'DesignCrud::delete/$1');

// CRUD RESTful Routes for vertical sliding records 

$routes->get('vs-list', 'VsCrud::index');
$routes->get('vs-form', 'VsCrud::create');
$routes->post('submit-form-vs', 'VsCrud::store');
$routes->get('editvs-view/(:num)', 'VsCrud::singleVs/$1');
$routes->post('updatevs', 'VsCrud::update');
$routes->get('deletevs/(:num)', 'VsCrud::delete/$1');

// CRUD RESTful Routes for dimeco records 

$routes->get('dimeco-list', 'DimecoCrud::index');
$routes->get('dimeco-form', 'DimecoCrud::create');
$routes->post('submit-form-dimeco', 'DimecoCrud::store');
$routes->get('editdimeco-view/(:num)', 'DimecoCrud::singleDimeco/$1');
$routes->post('updatedimeco', 'DimecoCrud::update');
$routes->get('deletedimeco/(:num)', 'DimecoCrud::delete/$1');

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
