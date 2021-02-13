<?php
/*
    Ejercicio 3: Programa que compruebe si una variable esta vacia y si esta vacia,
rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita;
*/

$texto = "";

if (empty($texto)) {
    $texto = "Hola soy el relleno de la variable texto";
    $textoMayus = strtoupper($texto);       // Cambiar todo el texto a mayusculas;

    echo "<strong>$textoMayus</strong>";        // Mostrarlo en negrita;

} else {
    echo "La variable tiene este contenido dentro: " . $texto;
}
