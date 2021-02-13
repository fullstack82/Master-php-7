<?php 
// Bucle For;
/*
$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado = $resultado += $i;
    echo "<p>$resultado</p>";
}
echo "<h1>El resultado es: $resultado</h1>";

echo "<hr/>";
*/

// Ejemplo tabla de multiplicar con el bucle for;

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 33;
}

echo "<h1> Tabla de multiplcar del numero $numero </h1>";

for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero * $contador)."</br>";
}

