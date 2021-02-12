<?php
// Ejercicio numero 1.

$galletas = 0;
while ($galletas < 10) {
    echo "$galletas, ";
    $galletas++;
}


echo "<hr/>";
// Ejercicio numer0 2.

$numero = 50;
while($numero > 40){
    echo "$numero, ";
    $numero--;
};
echo "<hr/>";
// Ejercicio numero 3.

$edad = 0;
while($edad <= 100){
    echo "$edad, ";
    $edad++;
};
echo "<hr/>";



// Ejercicio numero 4.

if($_GET['edad']){
    $edad = $_GET['edad'];
}else{
    $edad = 1;
};


var_dump($edad);

