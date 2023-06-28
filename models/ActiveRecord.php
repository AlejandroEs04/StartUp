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

  public static function all() {
    $query = "SELECT * FROM " . static::$tabla;

    $resultado = self::consultarSQL($query);

    return $resultado;
  }

  public static function find($id) {
    $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";
    $resultado = self::consultarSQL($query);

    return array_shift($resultado);
  }

  public static function consultarSQL($query) {
    // Consultar la base de datos
    $resultado =  self::$db->query($query);

    // Iterar los resultados
    $array = [];
    while ($registro = $resultado->fetch_assoc()) {
        $array[] = static::crearObjeto($registro);

        
    }

    // Liberar la memoria
    $resultado->free();

    // Retornar los resultados
    return $array;
  }

  public function setImagen($imagen) {
    // Elimina imagen previa
    if (!is_null($this->id)) {
        $this->borrarImagen();
    }

    // Asignar al atributo de imagen el nombre de la imagen
    if ($imagen) {
        $this->imagen = $imagen;
    }
  }

  public static function getErrores() {
    return static::$errores;
  }
  public function validar() {
    static::$errores = [];
    return static::$errores;
  }

  protected static function crearObjeto($registro) {
    $objeto = new static;

    foreach($registro as $key => $value) {
        if ( property_exists( $objeto, $key ) ) {
            $objeto->$key = $value;
        }
    } 

    return $objeto;
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