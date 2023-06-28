<?php 

namespace Controllers;

use Classes\Send;
use Model\Email;
use Model\Planes;
use Model\Servicios;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $tipo = "Desarrollo Web";
        $info = "Para hacer conocer tu empresa";
        $other = True;

        $servicios = Servicios::all();
        $planes = Planes::all();

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
                
                if(empty($_GET)) {
                    header('Location: ' . $_SERVER['HTTP_REFERER'] ."?resultado=1");
                } else {
                    header('Location: ' . $_SERVER['HTTP_REFERER'] ."&resultado=1");
                }
                
            }
        }

        $router->render('paginas/index', [
            'email'=> $email,
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other,
            'errores' => $errores,
            'resultado' => $resultado,
            'servicios' => $servicios,
            'planes' => $planes
        ]);
    }
    public static function nosotros(Router $router) {

        $tipo = "Nosotros";
        $info = "¿Quieres saber mas de nosotros?";
        $other = True;

        $servicios = Servicios::all();

        $router->render('paginas/nosotros', [
            'tipo' => $tipo,
            'info' => $info,
            'other' => $other,
            'servicios' => $servicios
        ]);
    }
    public static function contacto(Router $router) {

        $tipo = "Contactanos";
        $info = "Ponte en contacto con nosotros";
        $other = True;

        $servicios = Servicios::all();

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
            'resultado' => $resultado,
            'servicios' => $servicios
        ]);
    }
    public static function servicio(Router $router) {

        $servicios = Servicios::all();

        $servicioId = $_GET['id'];
        $servicio = Servicios::find($servicioId);
        $planes = Planes::all();

        $router->render('paginas/servicio', [
            'other' => True,
            'servicio' => $servicio,
            'servicios' => $servicios,
            'planes' => $planes
        ]); 
    }

    public static function plan(Router $router) {

        $planId = $_GET['plan'];
        $plan = Planes::find($planId);

        $servicios = Servicios::all();

        $planes = Planes::all();

        $router->render('paginas/plan', [
            'other' => True,
            'plan' => $plan,
            'planes' => $planes,
            'servicios' => $servicios
        ]); 
    }
}