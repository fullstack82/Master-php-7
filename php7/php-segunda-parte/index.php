<?php
/* PHP en profundidad:
* - Sesiones 
* - Cookies
* - Formularios
* - Variacion de formularios
* - Sistema de archivos
* - Subir ficheros
* - Bloque de ejercicios
*/

/*
*  Sesiones: Almacenar y persistir datos del usuario mientras que navega en un sitio web
* hasta que cierra sesion o cierra el navegador;
*/

// Inicio de sesion 
session_start();     // Hay que hacer un sesion_start en todos los ficheros en los que los vayamos a usar;

$variable_normal = "Soy una cadena de texto";      // Variable local




$_SESSION['variable_persistente'] = "Hola soy una sesión activa";   // Variable de sesión 


echo "$variable_normal.<br/>";


echo $_SESSION['variable_persistente'];
