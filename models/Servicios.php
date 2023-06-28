<?php

namespace Model;

class Servicios extends ActiveRecord {
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'imagen', 'descripcionResumida', 'descripcionCompleta'];

    public $id;
    public $nombre;
    public $imagen;
    public $descripcionResumida;
    public $descripcionCompleta;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcionResumida = $args['descripcionResumida'] ?? '';
        $this->descripcionCompleta = $args['descripcionCompleta'] ?? '';
    }
    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }
        if(!$this->descripcionResumida) {
            self::$errores[] = "La descripcion es obligatoria";
        }
        if(!$this->descripcionCompleta) {
            self::$errores[] = "La descripcion es obligatoria";
        }
        return self::$errores;
    }
}