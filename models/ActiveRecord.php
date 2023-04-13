<?php

namespace Model;

class ActiveRecord {

    // Errores o validacion
    protected static $errores = [];

    // Sincroniza Objetos en memoria
    public function sincronizar($args=[]) { 
        foreach($args as $key => $value) {
          if(property_exists($this, $key) && !is_null($value)) {
            $this->$key = $value;
          }
        }
    }
}