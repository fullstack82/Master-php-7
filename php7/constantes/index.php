<?php

// Definiendo constantes 
// Para usar una constante se pone sin el simbolo dolar$ simplemente se pone el nombre de la constante;
// Las constantes no varian su contenido

define('nombre', 'victor');
define('web', 'aprendiendoPHP.com');
define('telefono', '9812365474');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';
echo '<h1>'.telefono.'</h1>';




// Constantes predefinidas

echo PHP_OS;   // Sistema que estamos usando
echo '<br/>';
echo PHP_VERSION; // Nos muestra que version tenemos
echo '<br/>';
echo PHP_EXTENSION_DIR; // Nos muestra la extension que estamos usando
echo '<br/>';
echo __LINE__;
echo '<br/>';
echo __FILE__;

















?>