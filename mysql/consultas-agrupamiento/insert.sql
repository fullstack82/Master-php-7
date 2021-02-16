/*Inserts para categorias*/
INSERT INTO categorias VALUES(null, 'COD', 'Accion');
INSERT INTO categorias VALUES(null,'FIFA 2021', 'Deportes');

INSERT INTO categorias VALUES(null,'DISNEY', 'Entretenimiento');

INSERT INTO categorias VALUES(null,'DORA', 'Infantiles');



/*Inserts para entradas (Le agregamos cada una de las categorias que contiene entradas, sin dejarnos ninguna, en caso de no tener valor o que actualice solo, poner null*/
INSERT INTO entradas VALUES(null, 'Ward zone', 'Call Of Duty', '2021/02/16', 1, 1);
INSERT INTO entradas VALUES(null, 'San Andreas', 'GTA', CURDATE(), 1, 2);
INSERT INTO entradas VALUES(null, 'Sims', 'Sims 4', CURDATE(), 1, 3);
INSERT INTO entradas VALUES(null, 'PRO', 'Juego de fultbol', '2021/05/16', 2, 2);

INSERT INTO entradas VALUES(null, 'Zombies', 'plantas y zombies', CURDATE(), 2, 1);

INSERT INTO entradas VALUES(null, 'La sirenita', 'juego para niños', CURDATE(), 2, 3);  /*Curdate nos muestra la hora actual*/