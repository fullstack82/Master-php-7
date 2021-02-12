<?php
$dia = 4;


switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Es fin de semana";
        break;
}


echo "<br/>";
// GOTO 
goto marca;
echo "<h3>Instruccion 1 </h3>" ;
echo "<h3>Instruccion 2 </h3>" ;
echo "<h3>Instruccion 3 </h3>" ;
echo "<h3>Instruccion 4 </h3>" ;


marca:
echo "<h1>Me he saltado 4 echos</h1>";