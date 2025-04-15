<?php

use CodeIgniter\Router\RouteCollection;

// User Interface

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');

// API

$routes->group('api/distribusi', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('peringkat-akreditasi', 'Distribusi::peringkatAkreditasi');
    $routes->get('sekolah-per-tahun/(\b\d{4}\b)', 'Distribusi::sekolahPerTahun/$1'); // rehan ahli regex 😹
    $routes->get('sebaran-sekolah-terakreditasi/(:segment)', 'Distribusi::sebaranSekolahTerakreditasi/$1');
    $routes->get('akreditasi-berdasarkan-jenjang/(:segment)', 'Distribusi::akreditasiBerdasarkanJenjang/$1');
    $routes->get('(:any)', 'Distribusi::invalidParameters');
});

