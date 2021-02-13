<?php 
// Do while;

$edad = 16;
$contador = 1;
do{
    echo "Tienes acceso al local privado $contador";
    echo "<br/>";
    $contador++;
}while($edad >= 18 && $contador <= 60);