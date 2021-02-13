<?php
/*
- Ejercicio nº 6:
Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10;
*/


echo "<table border='1'> <tr>"; // Inicio de la tabla

echo "<tr>"; // inicio Fila uno de celdas

for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>"; // Cierre de la fila uno de las celdas;
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<tr>";  // inicio fila dos de celdas

for($i = 1; $i <= 10; $i++){
    echo "<td>";

    for($x = 1; $x <= 10; $x++){
        echo "$i x $x = ".($i*$x)."<br/>";
    } 

    echo "</td>";
}







echo "</tr>"; // Cierre fila dos de celdas
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
echo "</table>";  // Fin de la tabla

