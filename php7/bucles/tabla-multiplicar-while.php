<?php 
$numero = 45;


echo "<h1> Tabla de multiplcar del numero $numero </h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero * $contador)."</br>";
    $contador++;
}

