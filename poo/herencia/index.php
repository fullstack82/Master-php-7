<?php

require_once 'clases.php';


$persona = new Persona();

$persona->setNombre('maria');

var_dump($persona);

$informatico = new Informatico();
$informatico->sabeLenguajes("html, css, etc");
var_dump($informatico);

$tecnico = new TecnicoRedes();
echo "<pre>" . var_dump($tecnico) . "</pre>";
