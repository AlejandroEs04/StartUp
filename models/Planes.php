<?php

namespace Model;

class Planes extends ActiveRecord {
    protected static $tabla = 'planes';
    protected static $columnasDB = ['id', 'plan', 'costo', 'descripcion'];

    public $id;
    public $plan;
    public $costo;
    public $descripcion;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->plan = $args['plan'] ?? '';
        $this->costo = $args['costo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }

    public function validar() {
        if(!$this->plan) {
            self::$errores[] = "El nombre del plan es oblitatorio";
        }
        if(!$this->costo) {
            self::$errores[] = "El precio del plan es oblitatorio";
        }
        if(!$this->descripcion) {
            self::$errores[] = "La descripcion del plan es oblitatoria";
        }
        return self::$errores;
    }
}