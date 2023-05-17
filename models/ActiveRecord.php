<?php

namespace Model;

class ActiveRecord {

  // Base de datos
  protected static $db;
  protected static $columnasDB = [];
  protected static $tabla = '';

  // Errores o validacion
  protected static $errores = [];

  // Definir la conexion a la base de datos
  public static function setDB($database) {
    self::$db = $database;
  }

  // Guardar en la Base de Datos
  public function guardar() {
    if(!is_null($this->id)) {
      // Actualizar 
      $this->actualizar();
    } else {
      // Creando un nuevo registro
      $this->crear();
    }
  }

  // Crear un nuevo registro
  public function crear() {
    // Sanitizar los datos
    $atributos = $this->sanitizarAtributos();

    // Insertar en la base de datos
    $query = " INSERT INTO " . static::$tabla . " (";
    $query .= join(', ', array_keys($atributos));
    $query .= " ) VALUES ('";
    $query .= join("' , '", array_values($atributos));
    $query .= " ') ";

    $resultado = self::$db->query($query);

    // Mensaje de exito
    if($resultado) {
      // Redireccionar al usuario.
      header('Location: /admin?resultado=1');
    }
  }

  public function actualizar() {

  }

  public function atributos() {
    $atributos = [];
      foreach(static::$columnasDB as $columna) {
          if($columna === 'id') continue;
          $atributos[$columna] = $this->$columna;
      }

      return $atributos;
  }

  public static function getErrores() {
    return static::$errores;
  }
  public function validar() {
    static::$errores = [];
    return static::$errores;
  }

  public function sanitizarAtributos() {
    $atributos = $this->atributos();
      $sanitizado = [];

      foreach($atributos as $key => $value) {
          $sanitizado[$key] = self::$db->escape_string($value);
      }

    return $sanitizado;
  }

  // Sincroniza Objetos en memoria
  public function sincronizar($args=[]) { 
    foreach($args as $key => $value) {
      if(property_exists($this, $key) && !is_null($value)) {
        $this->$key = $value;
      }
    }
  }
}