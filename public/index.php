<?php

use Controllers\AdminController;
use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . "../../includes/app.php";

$router = new Router();

/** ZONA PUBLICA **/
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->get('/portafolio', [PaginasController::class, 'portafolio']);
$router->get('/servicios', [PaginasController::class, 'servicios']);
$router->get('/servicio', [PaginasController::class, 'servicio']);

/** Zona de Administrador **/
$router->get('/admin', [AdminController::class, 'index']);
$router->get('/crear/servicios', [AdminController:: class, 'servicios']);
$router->post('/crear/servicios', [AdminController:: class, 'servicios']);
$router->get('/crear/plan', [AdminController:: class, 'plan']);
$router->post('/crear/plan', [AdminController:: class, 'plan']);
$router->get('/correos', [AdminController::class, 'correos']);

$router->comprobarRutas();