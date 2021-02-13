
<?php

$archivo = fopen('fichero_texto.txt', 'r');    // Abrir archivo (los permisos: 'r' permite leer los archivos (a+ permite leer y escribir en los ficheros));


// Leer contenido 

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br/>";
}


fclose($archivo);               // Cerrar archivo