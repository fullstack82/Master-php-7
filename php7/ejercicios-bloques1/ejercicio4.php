<?php 
/*
- Ejercicio nº 4:
Recoger dos numeros por la url(parametros GET) y hacer todas las operaciones basicas de una calculadora
(suma, resta, multiplicación,division y resto) de esos dos numeros;
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "Suma: ".($numero1+$numero2)."<br/>";
echo "Resta: ".($numero1-$numero2)."<br/>";
echo "Multiplicación: ".($numero1*$numero2)."<br/>";
echo "División: ".($numero1%$numero2)."<br/>";
echo "Resto: ".($numero1/$numero2)."<br/>";


}else{
    echo "<h1>Intriduce correctamente los valores por la url</h1>";
}

