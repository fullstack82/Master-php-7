<?php
// Programacion orientada a objetos en php (POO);

// Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas);

// Las clases se definen con la palabra reservada "class" y siempre empiezan por mayusculas

class Coche{
    public $color = "lila";
    public $marca = "alpha";
    public $modelo = "sport";
    public $caballos = 400;
    public $velocidad = 250;
    public $plazas = 5;


    // Metodos, son acciones que hace el objeto (antes se conocian como funciones);
    public function getColor(){
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velicidad--;
    }
    // Devolvemos el valor que tiene el método
    public function getVelocidad(){
        return $this->velocidad;
    }

}

