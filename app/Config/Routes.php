<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'todoCont::index');
$routes->get('/logout', 'todoCont::logout');
$routes->post('/auth', 'todoCont::authenticate');
$routes->get('/createUser', 'todoCont::createUser');
$routes->post('/user2DB', 'todoCont::user2DB');
$routes->get('/todolist', 'todoCont::index');
$routes->get('/todolist/home', 'todoCont::todolist');
$routes->post('/todolist/simpan', 'todoCont::simpanKegiatan');
$routes->get('/todolist/selesai/(:segment)', 'todoCont::selesaiKegiatan');
$routes->get('/todolist/hapus/(:segment)', 'todoCont::hapusKegiatan');
$routes->get('/todolist/edit/(:segment)', 'todoCont::editKegiatan');