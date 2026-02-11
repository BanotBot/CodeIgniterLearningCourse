<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
*/

$routes->get('/', 'Home::index');

$routes->get("/Login/index", "Login::index");
$routes->post('/Login/auth', 'Login::auth');

$routes->get("/register/index", "register::index");
$routes->post("/register/userRegistration", "register::userRegistration");


