<?php

namespace Controllers;
use Model\Planes;
use MVC\Router;

class AdminController {
    public static function index(Router $router) {

        $router->render('admin/index', [
            'admin' => True
        ]);
    }

    public static function servicios(Router $router) {

        $router->render('servicios/crear', [
            'admin' => True
        ]);
    }

    public static function plan(Router $router) {

        $plan = new Planes;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia
            $plan = new Planes($_POST['planes']);

            $errores = $plan->validar();

            if(empty($errores)) {
                // Guardar en la base de datos
                $plan->guardar();
            }

            
        }

        $router->render('plan/crear', [
            'admin' => True
        ]);
    }

    public static function correos(Router $router) {

        $router->render('admin/correos', [
            'admin' => True
        ]);
    }
}