<?php

namespace Model;

class Planes extends ActiveRecord {
    protected static $tabla = 'planes';
    protected static $columnasDB = ['id', 'plan', 'costo', 'descripcion', 'secciones', 'mantenimiento'];

    public $id;
    public $plan;
    public $costo;
    public $descripcion;
    public $secciones;
    public $mantenimiento;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->plan = $args['plan'] ?? '';
        $this->costo = $args['costo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->secciones = $args['secciones'] ?? '';
        $this->mantenimiento = $args['mantenimiento'] ?? '';
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