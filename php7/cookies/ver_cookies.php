<?php

/* Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal,
* es un array asociativo.
*/
// Comprueba que existe la cookie (isset), y si existe me la muestra por pantalla;
if (isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
} else {
    echo 'no existe la cookie';
}




if (isset($_COOKIE['unyear'])) {
    echo "<h1>" . $_COOKIE['unyear'] . "</h1>";
} else {
    echo 'No existe la cookie';
}

?>

<a href="borrar_cookies.php">Borrar cookies</a>
<a href="crear_cookies.php">Crear cookies</a>