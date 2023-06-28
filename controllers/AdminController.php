<?php

namespace Controllers;
use Model\Planes;
use Model\Servicios;
use Model\Usuarios;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController {
    public static function index(Router $router) {

        $router->render('admin/index', [
            'admin' => True
        ]);
    }

    public static function servicios(Router $router) {

        $servicio = new Servicios;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Crear una nueva instancia 
            $servicio = new Servicios($_POST['servicios']);
    
            // Subida de archivos
            // Generar un nombre unico
            $nombreImagen = md5( uniqid(rand(), true) ) .".jpg";

            if ($_FILES['servicios']['tmp_name']['imagen']) {
                // Realiza un resize a la imagen con intervetion
                $image = Image::make($_FILES['servicios']['tmp_name']['imagen'])->fit(800, 600);
                $servicio->setImagen($nombreImagen);
            }
    
            // Revisar que el arreglo de errores esta vacio
            if (empty($errores)) {
                // Almzacenar la imagen
                if (!is_dir(CARPETAS_IMAGENES)) {
                    mkdir(CARPETAS_IMAGENES);
                }
                // Guardar la imagen en el servidor
                $image->save(CARPETAS_IMAGENES . $nombreImagen);

                // Guardar en la base de datos
                $servicio->guardar();

            }
        }



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