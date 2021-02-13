<?php 
/*
- Ejercicio nº 3:
Escribe un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo)
de los 40 primeros numeros naturales;

PD: Utilizar bucle while;

*/
/* Ejercicio con bucle while

$contador = 0;

while($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es: $cuadrado</h3>";
    $contador++;
}

*/


// Mismo ejercicio con el bucle for;

for($contador = 0;$contador <= 40; $contador++){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es: $cuadrado</h3>";
    
}