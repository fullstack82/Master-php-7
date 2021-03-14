<?php
class Coche
{

    // Mala practica no se deben poner los valores directamente (se ponen en constructor)
    public $color;
    private $marca;
    protected $modelo;
    public $caballos;
    public $velocidad;
    public $plazas;

    // Constructor en php (setear valores dentro del constructor)

    public function __construct($color, $marca, $modelo, $caballos, $velocidad, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->caballos = $caballos;
        $this->velocidad = $velocidad;
        $this->plazas = $plazas;
    }


    // Metodos, son acciones que hace el objeto (antes se conocian como funciones);
    public function getColor()
    {
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    // Cambiar valor a la propiedad en este caso color
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }
    // Devolvemos el valor que tiene el método
    public function getVelocidad()
    {
        return $this->velocidad;
    }


    public function mostrarInfo(Coche $miObjeto){       // Poniendo coche delante le estamos exigiendo que sea un objeto de tipo coche, (la clase)en este caso la de coche
        if(is_object($miObjeto)){
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/> Color: ".$miObjeto->color;
        $informacion .= "<br/> Marca: ".$miObjeto->marca;
        $informacion .= "<br/> Caballos: ".$miObjeto->caballos;
        $informacion .= "<br/> Velocidad: ".$miObjeto->velocidad;
        $informacion .= "<br/> Plazas: ".$miObjeto->plazas; 
        }else{
            $informacion = "Tu dato es este: 
                $miObjeto";
        }


        return $informacion;
    }
}  


