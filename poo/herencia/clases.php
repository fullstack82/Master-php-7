<?php
// Definicion de herencia = la posibilidad de compartir atributos y metodos entre clases;

class Persona {
    public $nombre;
    public $apellidos;
    public $edad;
    public $altura;

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setNombre(){
        $this->nombre;
    }
    public function setApellidos(){
        $this->apellidos;
    }
    public function setEdad(){
        $this->edad;
    }
    public function setAltura(){
        $this->altura;
    }

}