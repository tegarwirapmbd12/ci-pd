<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/dashboard', 'Pages::dashboard');
$routes->get('/sdg', 'Pages::sdg');
$routes->get('/lakip', 'Pages::lakip');
$routes->get('/rpjmd', 'Pages::rpjmd');
$routes->get('/lppd', 'Pages::lppd');
$routes->get('/spm', 'Pages::spm');
$routes->get('/pencarian', 'Pages::pencarian');
$routes->get('/pencarian/tabel', 'Pages::tabel');


$routes->get('/bps', 'Pages::bps');
$routes->get('/staticTable', 'Pages::staticTable');


$routes->get('/getBps', 'Pages::getBps');
// $routes->get('/ringkasan-data', 'Pages::ringkasanData');
