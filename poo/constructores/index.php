<?php
require_once 'coche.php';

$coche = new Coche("rojo", "ferrari", "murcielago", 150, 200, 2);
echo "<br/>";
$coche1 = new Coche("verde", "alpha", "romeo", 179, 200, 4);
echo "<br/>";
$coche2 = new Coche("rosa", "renault", "clio", 130, 150, 5);
echo "<br/>";
$coche3 = new Coche("amarillo", "ferrari", "X63", 180, 200, 2);
echo "<br/>";
/*var_dump($coche);
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);*/


$coche->color = "lila";
$coche->setMarca("audi");

echo $coche->mostrarInfo($coche1);

//var_dump($coche->getModelo());