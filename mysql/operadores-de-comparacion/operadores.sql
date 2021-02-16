
/*Comodines en mysql para el operador like
- Cualquier cantidad de caracteres: %,
- Un caracter desconocido: _, sino conocemos la palabra y no sabemos las dos letras de en medio, le ponemos dos guiones bajos y mysql te da las que contengan la letra
- 





*/


/*Consulta de una condicion*/

SELECT * FROM usuarios WHERE email = 'leonor2410@hotmail.com';


/*Ejemplos*/
/*
Mostrar nombres y apellidos de todos los usuarios registrados en el 2020;
*/

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2020;


/*
Mostrar nombres y apellidos de todos los usuarios que no se han registrado en 2020;
*/

SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2020;


/*
Mostrar el email de los usuarios cuayo apellido contenga la letra a, y ademas que su contraseña sea 123456;
*/
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 123456;



/*Sacar todos los registro de la tabla de usuarios cuyo año sea par*/
SELECT * FROM usuarios WHERE (YEAR(fecha) %2 = 0);

/*Sacar todos los registro de la tabla de usuarios cuyo año sea impar*/
SELECT * FROM usuarios WHERE (YEAR(fecha) %2 != 0);




/*Sacar todos los registros de la tabla de usuarios cuyo nombre tenga mas de 
5 letras y que se hayan registrado antes del 2021, y mostrar el nombre en mayusculas;
*/


SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;


/* ORDER BY */
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY fecha ASC ;


/*LIMIT = nos limita el numero de consultas(las que nosotros queramos agregar)*/
SELECT * FROM usuarios LIMIT 3;


SELECT * FROM usuarios LIMIT 0,5;

