<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Subida de archivos en PHP</title>
</head>

<body>
    <h1>Subir archivos en PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>