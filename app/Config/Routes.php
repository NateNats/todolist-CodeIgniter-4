<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/logout', 'todoCont::logout');
$routes->get('/user2DB', 'todoCont::user2DB');
$routes->get('/createUser', 'todoCont::createUser');
$routes->get('/todolist/login', 'todoCont::login');
$routes->get('/todolist', 'todoCont::index');
$routes->post('/todolist/simpan', 'todoCont::simpanKegiatan');
$routes->get('/todolist/selesai/(:segment)', 'todoCont::selesaiKegiatan');
$routes->get('/todolist/hapus/(:segment)', 'todoCont::hapusKegiatan');
$routes->get('/todolist/edit/(:segment)', 'todoCont::editKegiatan');