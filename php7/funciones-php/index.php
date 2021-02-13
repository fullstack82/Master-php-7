<?php
// Funciones en PHP

function muestraNombres()
{
    echo "maria <br/>";
    echo "maria <br/>";
    echo "maria <br/>";
    echo "<hr/>";
}

muestraNombres();
muestraNombres();
muestraNombres();




// Ejemplo 2 ;

$numero = 5;

function tabla($numero)
{
    echo "<h3>Tabla de multiplicar del numero: $numero </h3>";

    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";
    }
}
tabla(568);

// Tablas de multiplcar a traves del metodo $_GET

/*if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay numero para sacar la tabla";
}*/


// Todas las tablas juntas mostradas por pantalla;
/*
for ($i = 0; $i <= 10; $i++) {
    tabla($i);
}
*/

echo "<hr/>";
// Ejercicio 3;

function calculadora($numero1, $numero2)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multi: $multi <br/>";
    echo "División: $division <br/>";
    echo "<hr/>";
}
calculadora(100, 2515);
calculadora(1486, 250);
calculadora(180, 295);
calculadora(1023, 4925);
calculadora(1480, 2735);
