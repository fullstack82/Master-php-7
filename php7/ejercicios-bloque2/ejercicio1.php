<?
/*
    Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 numero enteros 
* y que haga lo siguiente: 
* - Recorrer y mostrarlo;
* - Ordenarlo y mostrarlo;
* - Mostrar su longitud;
* - Buscar algun elemento del array (buscar por el parametro que me llegue por la url)
*/

function mostrarArray($numeros){
    $resultado = "";
        foreach ($numeros as $numero){
            $resultado.= $numero."<br/>";
        }
        
        return $resultado;
}

// Crear un array;
$numeros = [2, 12, 67, 89, 15, 78, 91, 24];


echo "<h1> Recorrer y mostrar </h1>";
foreach ($numeros as $numero) {                 // Recorrer y mostrar;
    echo $numero . "<br/>";
}

echo "<h1> Ordenar y mostrar </h1>";             // Ordenarlo y mostrarlo;   
sort($numeros);
echo mostrarArray($numeros);
echo "<br/>";


echo "<h1> Mostrar su longitud </h1>";             // Mostrar su longitud;
echo count($numeros);


$busqueda = 155;

if(isset($_GET['numero'])){        //metodo get, se pone en la direccion de localhost y se empieza con (?)seguido del parametro
    $busqueda = $_GET['numero'];
    echo "<h1> Buscar en el array el número $busqueda </h1>";    // Busqueda en el array;
    $search = array_search($busqueda, $numeros);
    var_dump($search);
    
    
    if(empty(!$search)){
        echo "<h4>El número buscado existe en el array, en el indice: $search </h4>";
    }else{
        echo "No existe el numero buscado en el array";
    }
}





echo "<h1> Muestra la informacion tipo y valor </h1>"; 
var_dump($numero);

?>