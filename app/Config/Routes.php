<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Publicpg::index');

$routes->post('Publicpg/login', 'Publicpg::login');

$routes->get('Collegeprince', 'Collegeprince::index');
$routes->get('Collegeprince/profile', 'Collegeprince::profile');
