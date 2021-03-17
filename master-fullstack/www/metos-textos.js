'use strict';
// Transformacion de textos;
const numero = 444;
const texto1 = "buenas noches";
const texto2 = "mañana más...";

const dato1 = numero.toString();
const dato2 = texto1.toUpperCase();
const dato3 = texto2.toLocaleLowerCase();

console.log( texto1.toUpperCase()); // Lo convierte en mayusculas
console.log(typeof numero.toString()); // Convierte el numero en un string
console.log(texto2.toLocaleLowerCase()); // Convierte el texto en minusculas



// Calcular longitud;
const nombre = "Maria Leonor pinto sabater"; // En este caso nos devuelve 26 caracteres que son los que hay en total(contando los espacios)
console.log(nombre.length); // Te mide la longitud de caracteres que ahi...en este caso en nombre no hay ninguno, lo que nos devuelve 0;


// Concatenar = unir textos;
//const textoTotal = texto1+texto2; // Asi puedes concatenar cualquier string
const textoTotal = texto1.concat(numero) // Asi puedes concatenar cualquier cosa (string, numero...)
console.log(textoTotal)