<?php

namespace Controllers;

use MVC\Router;

class PlanesController {
    public static function planes(Router $router) {

        $router->render('planes/plan', [
            
        ]);

    }
}