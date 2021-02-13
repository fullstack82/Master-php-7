<?php
// Parametros opcionales;
function calculadora($numero1, $numero2, $negrita = false)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita) {
        $cadena_texto .= "<h1>";
    }



    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "División: $division <br/>";

    if ($negrita) {
        $cadena_texto .= "</h1>";
    }

    $cadena_texto .= "<hr/>";
    var_dump($cadena_texto);
    return $cadena_texto;
}

calculadora(10, 20);
calculadora(45, 80);
echo "calculadora(1085, 2960, true)";  // Invocamos el tercer parametro
calculadora(1048, 7970);

// Haciendo un return

function devuelveElNombre($nombre)
{
    return "El nombre es $nombre";
}

echo devuelveElNombre("maría");
