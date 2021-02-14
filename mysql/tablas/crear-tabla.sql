/*
int(numero de cifras) ENTERO (max 4294967295)
integer (numero de cifras) ENTERO (max 255 caracteres)
varchar(numero de caracteres) STRING/ALFANUMERICO (max 255 caracteres)
char(numero de caracteres) STRING/ALFANUMERICO
float(numero de cifras, numero decimales) DECIMAL / COMO FLOTANTE
date, time, timestamp (tipo de fecha)
text (65.535 carecteres)
mediumtext (16 millones de  caracteres)
longtext  (4 billones de caracteres)
*/

/*     
Crear tabla en mysql
*/

CREATE DATABASE master_php;
use master_php;

CREATE TABLE usuarios(
id int primary key AUTO_INCREMENT,
nombre VARCHAR(100) NOT NULL,
apellidos VARCHAR(100),
email VARCHAR(255) UNIQUE,
password VARCHAR(100)
);

