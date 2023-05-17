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

        $email = new Email;
        $errores = Email::getErrores();
        $resultado = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia para correo
            $email =  new Email($_POST['contacto']);

            $errores = $email->validar();

            if(empty($errores)) {
                $message = "Tiene un correo de: " . $email->name . " " . $email->lastName . "\n";
                $message .= "Correo: " . $email->email . "\n";
                $message .= "Mensaje: " . $email->message . "\n\n";
                $message .= "Enviado el: " . $email->fecha;

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");

                // Send
                mail('2004.estrada.lopez@gmail.com', 'Tienes un correo nuevo', $message);

                $resultado = 1;
            }
        }

        $router->render('paginas/index', [
            'email'=> $email,
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other,
            'errores' => $errores,
            'resultado' => $resultado
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

        $tipo = "Contactanos";
        $info = "Ponte en contacto con nosotros";
        $other = True;

        $email = new Email;
        $errores = Email::getErrores();
        $resultado = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia para correo
            $email =  new Email($_POST['contacto']);

            $errores = $email->validar();

            if(empty($errores)) {
                $message = "Tiene un correo de: " . $email->name . " " . $email->lastName . "\n";
                $message .= "Correo: " . $email->email . "\n";
                $message .= "Mensaje: " . $email->message . "\n\n";
                $message .= "Enviado el: " . $email->fecha;

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");

                // Send
                mail('2004.estrada.lopez@gmail.com', 'Tienes un correo nuevo', $message);

                $resultado = 1;
            }
        }

        $router->render('paginas/contacto', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other,
            'email'=> $email,
            'inicio' => True,
            'errores' => $errores,
            'resultado' => $resultado
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