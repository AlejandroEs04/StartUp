<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Send {
    public $nombre;
    public $apellido;
    public $comentario;
    public $correo;
    public $fecha;

    public function __construct($nombre, $apellido, $comentario, $correo, $fecha) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->comentario = $comentario;
        $this->correo = $correo;
        $this->fecha = $fecha;
    }

    public function enviarCorreo() {
        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '3b338730057713';
        $mail->Password = 'ea1bf9fbc64406';

        $mail->setFrom($this->correo);
        $mail->addAddress("2004.estrada.lopez@gmail.com");
        $mail->Subject = 'Correo de WebNano';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
        
        $mensaje = "<html>";
        $mensaje .= "<h1>Tiene un correo</h1>";
        $mensaje .= $this->nombre . " " . $this->apellido . "<p> Solicito contactarse con usted, con la fecha: </p>" . $this->fecha;
        $mensaje .= "<p>Dejo el siguiente mensaje: </p>";
        $mensaje .= $this->comentario;
        $mensaje .= "</html>";

        $mail->Body = $mensaje;


        // Enviar el email
        $mail->send();
    }
}