<?php
// Programacion orientada a objetos en php (POO);

// Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas);

// Las clases se definen con la palabra reservada "class" y siempre empiezan por mayusculas

class Coche
{
    // Public = podemos acceder a el desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o incluso fuera de la clase;
        public $color = "lila"; 
    // protected = podemos acceder desde la clase que los define y desde clases que hereden esta clase;
        protected $marca = "alpha"; 
    // Private = unicamente se puede acceder desde esta clase;
        private $modelo = "sport";
    public $caballos = 400;
    public $velocidad = 250;
    public $plazas = 5;


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
}    // Fin definicion de la clase

// Crear un objeto o instanciar la clase
    $coche = new Coche($color, $marca, $modelo, $caballos, $velocidad, $plazas);

    var_dump($coche);
echo "<br/>";

// Usar los metodos;
echo $coche->getVelocidad();
echo "<br/>";
echo $coche->getColor();
echo "<br/>";
$coche->setColor("amarillo");
echo "El color del coche es: ".$coche->getColor();
echo "<br/>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();


$coche->frenar();

echo "velocidad del coche: ".$coche->getVelocidad();

echo "<br/>";

// Creando segundo objeto 
$coche2 = new Coche($color, $marca, $modelo, $caballos, $velocidad, $plazas);

var_dump($coche2);
echo "<br/>";
var_dump($coche);