<?php
/*
-  Ejercicio nº 1: 
Crea una sesión que aumente su valor en uno o disminuya en uno en función de si parametro get_counter esta a uno o a cero:
*/


session_start();

if(!isset($_SESSION["numero"])){
    $_SESSION['numero']= 0;
};

if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;
};


if(isset($_GET['counter']) && $_GET['counter']==0){
    $_SESSION['numero']--;
};

?>
<h1>El valor de la sesión numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumenta el valor</a>;

<a href="ejercicio1.php?counter=0">Disminuir el valor</a>;