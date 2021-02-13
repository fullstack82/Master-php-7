<?php
// Ejemplo 4 : Llamar a dos funciones desde otra función;

function getNombre($nombre)
{
    $texto = "El nombre es: $nombre";
    return $texto;
};

function getApellidos($apellidos)
{
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}


function devuelveNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre)
        . "<br/>" .
        getApellidos($apellidos);
    return $texto;
}


echo devuelveNombre("maria", "pinto");



/* Sirven para funciones muy grandes, con mucha logica, muchas operaciones que van a ejecutar muchas instrucciones, 
* es muy util separarnos cada parte así más relevantes, en funciones más pequeñas; para que sea todo mucho mas mantentenible
* y veamos al final el codigo mucho mejor organizado y mas claro. Ademas son reutilizables
*/