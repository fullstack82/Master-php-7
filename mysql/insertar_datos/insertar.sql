/*Insertar datos MYSQL*/
INSERT INTO usuarios VALUES (null, 'Marisa', 'Pinto Sabater', 'leonor22@hotmail.com','2020-05-12','123456');
INSERT INTO usuarios VALUES (null, 'Marco', 'Sanchez Castro', 'marco@hotmail.com','2020-08-12','123456');

INSERT INTO usuarios VALUES (null, 'Luis', 'Martinez', 'luis@hotmail.com','2018-06-12','123456');

INSERT INTO usuarios VALUES (null, 'Sofia', 'Lopez', 'sofia@hotmail.com','2020-09-22','123456');



/*Mostrar todos los registros/ filas de una tabla*/
SELECT * FROM usuarios;

SELECT email, nombre, apellidos FROM usuarios;


/*Funciones para fechas*/
