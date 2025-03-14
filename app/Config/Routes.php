<?php

use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->post('/conversor','Home::conversor');
$routes->get('/conf_perfil','PerfilController::conf_perfil');
$routes->get('/registro','RegistroController::registro');
$routes->get('/selector','UsuMantController::traer_usuarios');

$routes->group('login',function($routes){
    $routes->get('/', 'LoginController::login');
    $routes->get('select_suc','SucursalController::sucursales_x_emp');
    $routes->get('select_alm','AlmacenController::almacen_x_suc');
    $routes->post('ingresar', 'LoginController::logueo_ingreso');
    $routes->get('salir', 'LoginController::salir');
});

$routes->group('',['filter'=>'AuthFilter'], function($routes){
    $routes->get('/', 'Home::index');
    $routes->get('/usuario','UsuarioController::index');
    $routes->get('dashboard', 'Home::index');
    $routes->get('conf', 'MantUsuariosController::index');

});


$routes->group('conf',['filter'=>'AuthFilter'], function($routes){

    $routes->get('mant_usuarios', 'MantUsuariosController::index');
    $routes->get('mant_empresa', 'MantEmpresaController::index');
    $routes->get('mant_perfil', 'MantPerfilController::index');

});

$routes->group('incide',['filter'=>'AuthFilter'], function($routes){

    $routes->get('incide_consul', 'IncideConsulController::index');
    $routes->get('incide_report', 'IncideReportController::index');

});

$routes->group('asig',['filter'=>'AuthFilter'], function($routes){

    $routes->get('asignar_usu', 'AsigUsuController::index');
    $routes->get('respond_incide', 'RespondIncideController::index');

});

$routes->group('select',['filter'=>'CambioFilter'],function($routes){
    $routes->get('clientesprueba','UsuMantController::traer_clientes');
});