<?php
/*    OPeradores de comparación;
== Igual;

=== Identico;

!= Distinto;

<> = Diferente;

!== = NO identico;

< = Menor que...
> = Mayor que...

<= = Menor o igual que...
>= = Mayor o igual que...
*/

/*
        Condicional if estructura

        if(condicion){
            instrucciones;
        }else{
            otras instrucciones;
        };
*/


// Primer ejercicio
$galletas = true;
if ($galletas == true) {
    echo 'Hay galletas';
} else {
    echo 'No hay galletas';
};
echo "<br/>";
// Segundo ejercico
$color = "azul";
if($color == "rosa") {
    echo 'El color es rosa';
}else{
    echo 'Es de otro color';
};
echo "<br/>";
// Tercer ejercicio
$year = 2018;
if($year === 2021){
    echo 'Estamos en 2021';
}else{
    echo 'NO estamos en 2021';
};
echo "<br/>";

