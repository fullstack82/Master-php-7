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
    echo "<h2>".$nota['titulo']."<h2/>";
    echo "<br />";
    echo"<br>".$nota['descripcion']."<br/>";
    echo "<br />";
    echo $nota['color'].'<br/>';
}

// Insertar en la base de datos en PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota desde php', 'Esto es una nota desde php', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr />";
if($insert){
    echo "La insercion se ha echo correctamente";
}else{
    echo "Error: ".mysqli_error($conexion);
}