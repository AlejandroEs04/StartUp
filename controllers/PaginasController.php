<?php 

namespace Controllers;

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