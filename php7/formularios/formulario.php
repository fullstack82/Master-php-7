<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP y HTML</title>
</head>

<body>
    <form action="guardar.php" method="POST">
        Titulo:
        <p> <input type="text" name="titulo" /></p>
        Descripcion:
        <p> <textarea name="descripcion"></textarea></p>

        <input type="submit" value="enviar" />
    </form>
</body>

</html