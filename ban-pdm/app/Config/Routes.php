<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// User Interface

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');

// API

// $routes->get('/api', 'Home::index');
