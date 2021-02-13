<?php
/*
*   Crear un array con el contenido de la siguiente tabla:
* - accion : GTA, COD, FORNITE
* - aventura: ASSASINS, CRASH, PERSIA
* - Deportes: FIFA, PES, MOTTO GP
* 
* Cada fila debe ir en un fichero separado.
*
*/


$tabla = array(                                            // Array multidimensional
    "ACCION" => array("GTA", "COD", "FORNITE"),
    "AVENTURA" => array("ASSASINS", "CRASH", "PERSIA"),
    "DEPORTES" => array("FIFA", "PES", "MOTO GP")
);

/*var_dump(array_keys($tabla));   // Sirve para sacar el nombre de los indices 
*/

$categorias = array_keys($tabla);

?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php' ?>
    <?php require_once 'ejercicio5/primera.php' ?>
    <?php require_once 'ejercicio5/segunda.php' ?>
    <?php require_once 'ejercicio5/tercera.php' ?>
</table>