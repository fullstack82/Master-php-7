<?php
// Programacion Orientada a objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas);

// Las clases se declarar con mayuscula y con la palabra reservada "class";

class Coche {

    // Atributos o propiedades (variables);

    public $color = "rosa";
    public $marca = "Alpha";
    public $modelo = "sport";
    public $velocidad = 400;
    public $caballos = 250;
    public $plazas = 5;


    // Métodos, son acciones que hace el objeto (antes funciones);

    public function getColor(){
        //($this) Significa = Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor(){
        
    }

}