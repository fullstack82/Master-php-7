<?php 
// Conexion
$servidor = 'localhost';
$usuario = 'princess';
$password = 'password';
$database = 'blog';



$db = mysqli_connect($servidor, $usuario, $password, $database);
mysqli_query($db, "SET NAMES 'utf-8'");