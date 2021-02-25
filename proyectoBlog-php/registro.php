<?php
// Recoger los valores del formulario de registro
if (isset($_POST)) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    // Array de errores
    $errores = array();

    // Validar los datos antes de guardarlos en la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        echo "El nombre introducido es valido";
    } else {
        $errores['nombre'] = 'El nombre no es valido';
    };



    echo "<br/>";

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        echo "Los apellidos introducidos son validos";
    } else {
        $errores['apellidos'] = "Los apellidos no son validos";
    }


    echo "<br/>";


    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email es valido";
    } else {
        $errores['email'] = 'El email no es valido';
        var_dump($errores);
    }

    echo "<br/>";

    if (!empty($password)) {
        echo "La password esta validada";
    } else {
        $errores['password'] = "La password esta vacia";
    };
}
