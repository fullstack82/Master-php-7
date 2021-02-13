<?php
/*
*    Ejercicio 4: Crear un script en PHP que tenga 4 variables, una de tipo array,  
* otra de tipo string, otra int y otra booleana y que imprima un mensaje segun el 
* tipo de variable que sea.
*/


$matriz = array("Hola mundo", 77);
$titulo = "Master en PHP";
$numero = 75;
$verdadero = true;


if (is_array($matriz)) {        // Muestra si es un array
    echo "<h1>El array es un array</h1>";
}

if (is_string($titulo)) {      // Muestra si es un string
    echo "<h1>$titulo</h1>";
}

if (is_integer($numero)) {     // Muestra si es un numero entero
    echo "<h1>$numero</h1>";
}


if (is_bool($verdadero)) {
    echo "<h1>$verdadero</h1>";   // Muestra si es un booleano
}
