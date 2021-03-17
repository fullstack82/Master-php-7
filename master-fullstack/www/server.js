'use strict';
// Funciones anonimas 
// Es una funcion que no tiene nombre

function sumame(numero1, numero2, sumaYmuestra, sumaPorDos){
    var sumar = numero1 + numero2;

    sumaPorDos(sumar);
    sumaYmuestra(sumar);

    return sumar;
}
// Funciones anonimas 
sumame(5, 7, dato => {  //callback
    console.log("La suma es:", dato)
},
dato => {
    console.log("La suma por dos es:", (dato*2));
});

// Ambito de una variable
function holaMundo(texto){
    const hola_mundo = "Texto dentro de una variable local";
    console.log(texto)
    console.log(typeof numero.toString()) // Convertir un numero en un string;y con typeof te dice que clase de metodo es ;
    console.log(hola_mundo)
}

const numero = 12;
const texto = "Hola mundo soy una variable global";
holaMundo(texto);
//console.log(hola_mundo) // Es una variable local no se puede invocar desde aquì