use concesionario;
/*1. Modificar la comision de los vendedores y ponerla al 2% cuando ganana mas de 50.000 */

UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;
/*2. Incrementar el precio de los coches en un 2%*/

UPDATE coches SET precio = precio * 1.05;
/*3. Sacar todos los vendedores cuya fecha de alta sea posterior al 1 de julio de 2018 */

SELECT * FROM vendedores WHERE fecha >= '2018-07-01';
/*4. Mostrar todos los vendedores con su nombre y el numero de dias que llevan en el concesionario*/

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'dias' FROM vendedores;
/*5. Visualizar el nombre y los apellidos de los vendedores en una sola columna,
su fecha de registro y el dia de la semana en la que se registraron*/

SELECT CONCAT(nombre, ', apellidos') AS 'nombres y apellidos', fecha, DAYNAME(fecha) FROM vendedores;

/*6. Mostrar el nombre y el salario de los vendedores con cargo de 'Ayudante de tienda'*/

SELECT nombre, sueldo FROM vendedores WHERE cargo='Ayudante en tienda';

/*7. Visualizar todos los coches en cuya marca exista la letra "A" y cuyo modelo empiece por "F"*/
SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';

/*8. Mostrar todos los vendedores del grupo numero 2. ordenados por salario de mayor a menor*/

SELECT * FROM vendedores WHERE grupo_id=2 ORDER BY sueldo DESC;

/*9. Visualizar los apellidos de los vendedores, su fecha y su numero de grupo ordenado por fecha descendente,
mostrar los 4 ultimos*/

SELECT apellidos, fecha, id FROM vendedores ORDER BY fecha DESC LIMIT 4;

/*10. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo*/

SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo;

/*11. Conseguir la masa salarial del concesionario (anual)*/

SELECT SUM(sueldo) AS 'Masa salarial' FROM vendedores;


/*12. Sacar la media de sueldos entre todos los vendedores por grupo*/

SELECT CEIL(AVG(v.sueldo)) AS 'Media salarial', g.nombre, g.ciudad FROM vendedores v 
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;

/*13. Visualizar las unidades totales vendidas de cada coche a cada cliente.
Mostrando el nombre del coche, numero de cliente y suma de unidades*/

SELECT co.modelo AS 'COCHE', cl.nombre AS 'CLIENTE', SUM(e.cantidad) AS 'UNIDADES' 
FROM encargos e 
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;


/*14. Mostrar los clientes que mas encargos han hecho y mostrar cuantos hicieron*/

SELECT c.nombre, COUNT(e.id) FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

/*15. Obtener listado de clientes atendidos por el vendedor 'David Lopez*/

SELECT * FROM clientes WHERE vendedor_id IN 
(SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');


/*16. Obtener un listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'*/

SELECT e.id AS 'Nº ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN 
(SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc')


/*17. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"*/

SELECT * FROM clientes WHERE id 
IN (SELECT cliente_id FROM encargos WHERE coche_id
IN(SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));

/*18. Obtener los vendedores con 2 o mas clientes*/

SELECT * FROM vendedores WHERE id IN (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);

/*19. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo*/
SELECT * FROM grupos WHERE id IN (SELECT grupo_id FROM vendedores WHERE sueldo = (SELECT MAX(sueldo) FROM vendedores));

/*20. Obtener los nombres y ciudades de los clientes con encargos de 3 unidades en adelante*/

SELECT nombre, ciudad FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE cantidad >= 3);

/*21. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre*/

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR' FROM clientes c, vendedores v WHERE c.vendedor_id = v.id;

/*22. Listar todos los encargos realizados con la marca del coche y el nombre del cliente*/

SELECT e.id, co.marca, c.nombre FROM encargos e 
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id;


/*23. Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad,
pero unicamente cuando sean de Barcelona*/

SELECT e.id, co.modelo, c.nombre, c.ciudad FROM encargos e 
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';


/*24. Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados*/
SELECT ci.nombre, SUM(precio*cantidad) AS "IMPORTE" FROM clientes ci 
INNER JOIN encargos en ON ci.id = cliente_id
INNER JOIN coches co ON en.coche_id = co.id 
GROUP BY ci.nombre 
ORDER BY 2 ASC;


/*25. Sacar los vendedores que tienen jefe y sacar el nombre del jefe*/

SELECT CONCAT(v1.nombre, ' ', v1.apellidos) AS 'VENDEDOR',
CONCAT(v2.nombre, ' ', v2.apellidos) AS 'JEFE'
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;


/*26. Visualizar los nombres de los clientes y la cantidad de encargos realizados,
incluyendo los que no hayan realizado encargos*/

INSERT INTO clientes VALUES(NULL, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) FROM clientes c 
LEFT JOIN encargos e ON c.id = e.cliente_id 
GROUP BY 1;

/*27. Mostrar todos los vendedores y el numero de clientes 
se deben mostrar tengan o no clientes*/

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id 
GROUP BY v.id;


/*28. Crear una vista llamada vendedoresA que incluira todos los vendedores del grupo que se llame "Vendedores A"*/

CREATE VIEW vendedoresA AS 
SELECT * FROM vendedores WHERE grupo_id IN 
(SELECT id FROM grupos WHERE nombre="Vendedores A");


/*29. Mostrar los datos del vendedor con mas antiguedad en el concesionario*/

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

/*30. Obtener el coche con mas unidades vendidas*/

SELECT * FROM coches WHERE id IN (SELECT coche_id FROM encargos WHERE cantidad IN(SELECT MAX(cantidad) FROM encargos));