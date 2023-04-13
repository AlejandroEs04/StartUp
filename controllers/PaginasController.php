<?php 

namespace Controllers;

use Classes\Send;
use Model\Email;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $tipo = "Desarrollo Web";
        $info = "Para hacer conocer tu empresa";
        $other = True;

        $router->render('paginas/index', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other
        ]);
    }
    public static function nosotros(Router $router) {

        $tipo = "Nosotros";
        $info = "¿Quieres saber mas de nosotros?";
        $other = True;

        $router->render('paginas/nosotros', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other
        ]);
    }
    public static function contacto(Router $router) {

        $email = new Email($_POST);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email->sincronizar($_POST);

            $errores = $email->validar();

            if(empty($errores)) {
                $email = new Send($email->nombre, $email->apellido, $email->comentario, $email->correo, $email->fecha);
                $email->enviarCorreo();
            }
        }

        $tipo = "¿Quieres contactarnos?";
        $info = "Llena el formulario con tus datos";
        $other = True;

        $router->render('paginas/contacto', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other
        ]);
    }
    public static function portafolio(Router $router) {

        $tipo = "Portafolio";
        $info = "Conoce nuestros proyectos terminados";
        $other = True;

        $router->render('paginas/postafolio', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other
        ]);
    }
    public static function servicios(Router $router) {
        $router->render('paginas/servicios', [

        ]);
    }
    public static function servicio(Router $router) {
        $router->render('paginas/servicio', [

        ]); 
    }
}