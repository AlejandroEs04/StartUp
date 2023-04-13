<?php 

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {
        $router->render('paginas/index', [

        ]);
    }
    public static function nosotros(Router $router) {

        $tipo = "Nosotros";
        $other = True;

        $router->render('paginas/nosotros', [
            'tipo' => $tipo,
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
        $router->render('paginas/postafolio', [

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