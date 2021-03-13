<?php
// Programacion orientada a objetos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)
class Coche {
    // Atributos o propiedades (variables)

    public $color = "verde";
    public $modelo = "145";
    public $marca = "alpha";
    public $velocidad = 250;
    public $plazas = 5;
    public $caballos = 400;

    // Metodos, son acciones que hace el objeto (antes serian funciones)
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }
}