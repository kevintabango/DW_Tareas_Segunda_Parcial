<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Rutas para los zapatos
$routes->get('Zapatos/Z1', 'ControladorZapatos::mostrarDeportivos'); 
$routes->get('Zapatos/Z2', 'ControladorZapatos::mostrarTacones');      
// Rutas para los vestidos
$routes->get('Vestidos/V1', 'ControladorVestido::mostrarLargos');  
$routes->get('Vestidos/V2', 'ControladorVestido::mostrarCortos');      
// Rutas para las carteras
$routes->get('Carteras/C1', 'ControladorCartera::mostrarCuero');  
$routes->get('Carteras/C2', 'ControladorCartera::mostrarMano');     
