<?php 
// Conectar a la base de datos

$conexion = mysqli_connect("localhost", "princess", "password", "php");

// Comprobar que la base de datos se ha conectado correctamente

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos ha fallado:".mysqli_connect_error();
}else {
    echo "La base de datos se ha conectado correctamente";
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf-8'");
echo "<br />";

// Consulta SELECT desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");
// Reccorriendo las filas de las tablas
while($nota = mysqli_fetch_assoc($query) ){
    //var_dump($nota);
    echo $nota['titulo'].'<br/>';
    echo "<br />";
    echo $nota['descripcion'].'<br/>';
    echo "<br />";
    echo $nota['color'].'<br/>';
}


