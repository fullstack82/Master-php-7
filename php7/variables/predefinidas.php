<?php
// Funciones predefinidas

//Debugear
$nombre = "Maria Pinto";
var_dump($nombre);     // var_dump saca todos los datos de nombre en este caso

echo "<hr/>";

// Fechas 
$time = time();
echo date("d-m-y (H:i:s)", $time); // Fecha y hora actual;
echo "<br/>";
echo time();

echo "<hr/>";

// Matematicas
echo "Raiz cuadrada de 10: " . sqrt(10);  // (sqtr) saca la raiz cuadrada;

echo "<hr/>";

echo "Numero aleatorio entre 10 y 40: " . rand(10, 40); // (rand) nos muestra un numero aleatorio;

echo "<hr/>";

echo "Número pi:" . pi(); // (pi) nos muestra el número pi;

echo "<br/>";

echo "Redondear: " . round(7.89234, 1); // Numero a redondear, y decimales que quieres que se vean son los parametros de round();


echo "<hr/>";
// Más funciones generales

echo gettype($nombre);  // Devuelve el tipo de la variable;

echo "<hr/>";

// Detectar tipado;
if (is_string($nombre)) {
    echo "Esa variable es un string";
}

echo "<hr/>";

if (!is_float($nombre)) {
    echo "La variable nombre no es un decimal";
}

echo "<hr/>";
// Comprobar si existe una variable;Funcion isset, con ella comprobamos si la variable existe o no en el programa;

if (isset($nombre)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}
echo "<hr/>";


// Limpiar espacios
$frase = "     mi contenido     ";

var_dump(trim($frase));

/* Funcion trim(), le paso los parametros de la variable que quiero limpiar,(de un string)
* por delante y por detras; de forma que podemos sanear muchisimo el contenido de las variables;
* Se suele usar mucho en php para los formularios, para los espacios que pueda haber incluido el usuario, por delante o por detras;
* queda de una manera mucho mas limpia en la base de datos;
*/

// Eliminar variables / indices de arrays;
$year = 2021;
unset($year); // Elimina la variable

echo "<hr/>";
// Comprobar variable vacia (empty) te dice si la variable tiene contenido o no;
$texto = false;
if (empty($texto)) {
    echo "La variable texto esta vacia";
} else {
    echo "La variable tiene contenido";
}

echo "<hr/>";


// Contar caracteres de un string;
$cadena = "12345";
echo strlen($cadena);
echo "<hr/>";


// Encontrar caracter;
$frase = "La vida es bella";
echo strpos($frase, "b");

echo "<hr/>";

// Reemplazar el contenido de un string;
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<hr/>";
// Mayusculas y minisculas;
echo strtolower($frase);  // Convertilas a minusculas;
echo "<hr/>";
echo strtoupper($frase);  // Convertirlas a mayusculas;