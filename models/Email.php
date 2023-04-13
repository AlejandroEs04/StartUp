<?php

namespace Model;

class Email extends ActiveRecord {
    public $nombre;
    public $apellido;
    public $comentario;
    public $correo;
    public $fecha;

    public function __construct($args = []) {
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->comentario = $args['comentario'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->fecha = date('Y/m/d');
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El nombre es oblitatorio";
        }
        if(!$this->apellido) {
            self::$errores[] = "El apellido es oblitatorio";
        }
        if(!$this->comentario) {
            self::$errores[] = "El comentario es oblitatorio";
        }
        if(!$this->correo) {
            self::$errores[] = "El correo es oblitatorio";
        }
        return self::$errores;
    }
}