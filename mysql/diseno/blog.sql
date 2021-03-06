CREATE DATABASE master;

USE master;
CREATE TABLE  IF NOT EXISTS usuarios(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(200) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    password VARCHAR(128) NOT NULL
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS categorias(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria TEXT NOT NULL
)ENGINE=InnoDb;


CREATE TABLE IF NOT EXISTS entradas(
    id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuarios_id INT UNSIGNED ,
    FOREIGN KEY (usuarios_id) REFERENCES usuarios(id),
    categorias_id INT UNSIGNED,
    FOREIGN KEY (categorias_id) REFERENCES categorias(id)
)ENGINE=InnoDb;