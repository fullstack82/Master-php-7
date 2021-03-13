<?php
if (isset($_POST['submit'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = $_POST['password'] ? $_POST['password'] : false;
    var_dump($_POST);


    $errores = array();



    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        echo "el nombre es valido";
    } else {
        $errores['nombre'] = "el nombre no es valido";
    }
}
