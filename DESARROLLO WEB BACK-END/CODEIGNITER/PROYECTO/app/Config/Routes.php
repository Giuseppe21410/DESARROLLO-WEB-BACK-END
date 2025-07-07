<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Start::index');          // Página principal muestra login
$routes->get('login', 'Login::index');     // Ruta login

$routes->post('login/auth', 'Login::auth'); // Procesa login
$routes->get('login/logout', 'Login::logout');   // Logout



// Rutas para el inicio:
$routes->get('home', 'Home::index'); // Página de inicio
// Rutas para el CRUD de trabajadores:
$routes->get('trabajadores', 'Trabajadores::index'); // Lista de trabajadores
$routes->post('trabajadores/add','Trabajadores::guardar'); // Añade un trabajador.
$routes->post('trabajadores/eliminar', 'Trabajadores::eliminar'); // Elimina un trabajador.
$routes->post('trabajadores/editar', 'Trabajadores::editar'); // Edita al trabajador
// Rutas para la composición y materiales para los productos: 
$routes->get('material_composicion', 'MaterialComposicion::index'); // Lista de trabajadores

