<?php 

namespace Model;

class Usuarios extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'password'];

    public $id;
    public $nombre;
    public $password;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El Nombre de Usuario es obligatorio";
        }
        if(!$this->password) {
            self::$errores[] = "El password es obligatorio";
        }
        return self::$errores;
    }

    public function existeUsuario() {
        // Revisar si el usuario existe en la base de datos
        $query = "SELECT * FROM " . self::$tabla . " WHERE nombre = '" . $this->nombre . "' LIMIT 1";

        $resultado = self::$db->query($query);
        
        if(!$resultado->num_rows) {
            self::$errores[] = "El usuario no existe";
            return;
        }


        return $resultado;
    }

    public function comprobarPassword($resultado) {
        $usuario = $resultado->fetch_object();

        $this->autenticado = password_verify($this->password, $usuario->password);

        if(!$this->autenticado) {
            self::$errores[] = "El password es incorrecto";
            return;
        }

        return $this->autenticado;
    }

    public function autenticar() {
        // El usuario esta autenticado 
        session_start();

        // Llenar el arreglo de la sesion
        $_SESSION['usuario'] = $this->nombre;
        $_SESSION['login'] = true;

        header('Location: /admin');
    }
}