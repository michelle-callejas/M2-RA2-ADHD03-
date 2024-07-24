<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ver_regiones', 'RegionesController::index');
$routes->post ('agregar_region', 'RegionesController::agregarRegion');
$routes->get ('nueva_region', 'RegionesController::nuevaRegion');
$routes->get('eliminar_region/(:num)', 'RegionesController::eliminarRegion/$1');
$routes->get('buscar_region/(:num)', 'RegionesController::buscarRegion/$1');
$routes->post('modificar_region', 'RegionesController::modificarRegion');



$routes->get('ver_departamentos', 'DepartamentosController::index');
$routes->post ('agregar_departamento', 'DepartamentosController::agregarDepartamento');
$routes->get ('nuevo_departamento', 'DepartamentosController::nuevoDepartamento');
$routes->get('eliminar_departamento/(:num)', 'DepartamentosController::eliminarDepartamento/$1');
$routes->get('buscar_departamento/(:num)', 'DepartamentosController::buscarDepartamento/$1');
$routes->post('modificar_departamento', 'DepartamentosController::modificarDepartamento');



$routes->get('ver_municipios', 'MunicipiosController::index');
$routes->post ('agregar_municipio', 'MunicipiosController::agregarMunicipio');
$routes->get ('nuevo_municipio', 'MunicipiosController::nuevoMunicipio');
$routes->get('eliminar_municipio/(:num)', 'MunicipiosController::eliminarMunicipio/$1');
$routes->get('buscar_municipio/(:num)', 'MunicipiosController::buscarMunicipio/$1');
$routes->post('modificar_municipio', 'MunicipiosController::modificarMunicipio');



$routes->get('ver_niveles', 'NivelesAcademicosController::index');
$routes->post ('agregar_nivel', 'NivelesAcademicosController::agregarNivel');
$routes->get ('nuevo_nivel', 'NivelesAcademicosController::nuevoNivel');
$routes->get('eliminar_nivel/(:num)', 'NivelesAcademicosController::eliminarNivel/$1');
$routes->get('buscar_nivel/(:num)', 'NivelesAcademicosController::buscarNivel/$1');
$routes->post('modificar_nivel', 'NivelesAcademicosController::modificarNivel');



$routes->get('ver_ciudadanos', 'CiudadanosController::index');
$routes->post ('agregar_ciudadano', 'CiudadanosController::agregarCiudadano');
$routes->get ('nuevo_ciudadano', 'CiudadanosController::nuevoCiudadano');
$routes->get('eliminar_ciudadano/(:num)', 'CiudadanosController::eliminarCiudadano/$1');
$routes->get('buscar_ciudadano/(:num)', 'CiudadanosController::buscarCiudadano/$1');
$routes->post('modificar_ciudadano', 'CiudadanosController::modificarCiudadano');

// vista, controlador y método

