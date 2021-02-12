<?php
// Ejercicio 1.

$test = 22;

if ($test > 40) {
    echo "si, $test es mayor de edad";
} else if ($test > 35) {
    echo "si, $edad es mayor que 35";
} else if ($test > 30) {
    "si, $test es mayor que 30";
} else {
    echo "no, $test es menor que 40, 35 y 30";
};


echo "<br/>";

// Ejercicio 2.  // Poco optimo para un codigo

$dia = 5;

/*if($dia == 1){
    echo "Es lunes";
}else{
    if($dia == 2){
        echo "Es martes";
    }else{
        if($dia == 3){
            echo "Es miercoles";
        }else{
            if($dia == 4){
                echo "Es jueves";
            }else{
                if($dia == 5){
                    echo "Es viernes";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
};*/
// Mismo ejercicio con el codigo mejorado, más optimo;
if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
}elseif($dia == 3){
    echo "Miercoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia == 5){
    echo "Viernes";
}else{
    echo "Es fin de semana";
};



