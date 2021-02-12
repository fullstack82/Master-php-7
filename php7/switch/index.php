<?php
// Operadores logicos (&& = and, || = or , ! = no) los tres principales

// Ejemplo numero 1.

$edad1 = 18;
$edad2 = 64;

$edad_oficial = 55;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Esta en edad de trabajar";
} else {
    echo "No, no esta en edad de trabajar";
}

echo "<hr/>";
// Ejemplo numero 2. Usando el or (o) 

$pais = "Mexico";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "En esta pais no se habla español";
}
