<?php

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

$router->comprobarRutas();