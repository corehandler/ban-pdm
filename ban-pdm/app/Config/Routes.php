<?php

use CodeIgniter\Router\RouteCollection;

// User Interface

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');

// API

$routes->get('api', 'Distribusi::documentation');

$routes->group('api/distribusi', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Distribusi::documentation');
    $routes->get('peringkat-akreditasi', 'Distribusi::peringkatAkreditasi');
    $routes->get('sekolah-per-tahun/(20[0-9]{2})', 'Distribusi::sekolahPerTahun/$1');
    $routes->get('sebaran-sekolah-terakreditasi/(:segment)', 'Distribusi::sebaranSekolahTerakreditasi/$1');
    $routes->get('akreditasi-berdasarkan-jenjang/(:segment)', 'Distribusi::akreditasiBerdasarkanJenjang/$1');
    $routes->get('(:any)', 'Distribusi::invalidParameters');
});