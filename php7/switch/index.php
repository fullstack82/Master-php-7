<?php
$dia = 4;





echo "<br/>";
// GOTO 
goto marca;     // Aqui declaro GOTO (marca)
echo "<h3>Instruccion 1 </h3>" ;
echo "<h3>Instruccion 2 </h3>" ;
echo "<h3>Instruccion 3 </h3>" ;
echo "<h3>Instruccion 4 </h3>" ;

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


marca:
echo "<h1>Me he saltado 4 echos</h1>";  // AQUI LO EJECUTO SALTANDOSE EL RESTO DEL CODIGO 