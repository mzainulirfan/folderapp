<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('blog', 'Home::blog');
$routes->get('apps', 'Home::apps');
$routes->get('shop', 'Home::shop');

$routes->get('admin', 'Admin::index');
$routes->get('admin/product', 'Admin::products');