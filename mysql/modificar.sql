    /* Renombrar una tabla*/
ALTER TABLE
    usuarios RENAME TO users;
    /* Cambiar el nombre de una columna*/
ALTER TABLE
    users CHANGE apellidos apellido VARCHAR(100);
    /* Modificar una columna sin cambiar el nombre */
ALTER TABLE users MODIFY apellido CHAR(40) NOT NULL;


    /* Añadir columna*/
ALTER TABLE users ADD website VARCHAR(100) NOT NULL;