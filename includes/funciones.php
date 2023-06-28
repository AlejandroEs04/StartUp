<?php 

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETAS_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function incluirTemplate( string $nombre ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function incluirTemplateArray( string $nombre, $info) {
    $_POST["info"] = $info;
    include TEMPLATES_URL . "/${nombre}.php";
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function mostrarNotificacion($resultado) {
    $mensaje = '';

    switch($resultado) { 
        case 1:
            $mensaje = 'Mensaje enviado correctamente';
        break;

        default:
            $mensaje = false;
        break;
    }

    return $mensaje;
}