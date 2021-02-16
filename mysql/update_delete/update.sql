/*Modificar filas / actualizar datos, poner siempre el WHERE por seguridad, ya que es peligroso si no se usa con cuidado*/

UPDATE usuarios SET fecha='2021-06-25' WHERE id=4;



/*ELiminar registros y filas de nuestra tabla (Es muy peligroso)*/
DELETE FROM usuarios WHERE email = 'leonor@gmail.com';