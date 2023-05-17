<?php

namespace Model;

class Email extends ActiveRecord {
    public $name;
    public $lastName;
    public $email;
    public $message;
    public $fecha; 

    public function __construct($args = []) {
        $this->name = $args['name'] ?? '';
        $this->lastName = $args['lastName'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->message = $args['message'] ?? '';
        $this->fecha = date('Y/m/d');
    }

    public function validar() {
        if(!$this->name) {
            self::$errores[] = "Name is required";
        }
        if(!$this->lastName) {
            self::$errores[] = "Last Name is required";
        }
        if(!$this->email) {
            self::$errores[] = "Email is required";
        }
        if(!$this->message) {
            self::$errores[] = "Message is required";
        }
        

        return self::$errores;
    }
}