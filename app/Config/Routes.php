<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Autenticação
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginPost');
$routes->get('logout', 'Auth::logout');

// Painel e teste
$routes->get('painel', 'Dashboard::index');
$routes->get('teste', 'Teste::index');

// Usuários
$routes->get('usuario/create', 'Usuario::create');
$routes->post('usuario/store', 'Usuario::store');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerPost');

// Caminhões
$routes->get('caminhao', 'Caminhao::index');
$routes->get('caminhao/create', 'Caminhao::create');
$routes->post('caminhao/store', 'Caminhao::store');
$routes->get('caminhao/edit/(:num)', 'Caminhao::edit/$1');
$routes->post('caminhao/update/(:num)', 'Caminhao::update/$1');
$routes->match(['get', 'post'], 'caminhao/delete/(:num)', 'Caminhao::delete/$1');

