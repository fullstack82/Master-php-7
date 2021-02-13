<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Formulario PHP y HTML</title>
</head>

<body>
    <!--Todos los tipos de campos que hay en html-->
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Multipart permite enviar archivos desde el formulario al servidor -->
        <label for="nombre">Nombre:</label>
        <p> <input type="text" name="nombre" autofocus="autofocus" /></p>
        <!--APellidos-->
        <label for="apellido">Apellido:</label>
        <p> <input type="text" name="apellido" required /></p>
        <!--Crear un boton-->
        <label for="boton">Boton:</label>
        <p> <input type="button" name="boton" value="Haz click" /></p>
        <!--Checkbox-->
        <label for="sexo">Sexo:</label>
        <p> <input type="checkbox" name="sexo" value="hombre" checked="check" />Hombre
            <input type="checkbox" name="sexo" value="mujer" />Mujer
        </p>
        <!--Saca un cuadro de color-->
        <label for="color">Color:</label>
        <p> <input type="color" name="color" /></p>
        <!--Meter fecha-->
        <label for="fecha">Fecha:</label>
        <p> <input type="date" name="fecha" /></p>
        <!--Email-->
        <label for="email">Email:</label>
        <p> <input type="email" name="email" /></p>
        <!--Subir multiples archivos-->
        <label for="archivo">Archivos:</label>
        <p> <input type="file" name="archivo" multiple="multiple" /></p>
        <!--Campo de numeros (+ o -) -->
        <label for="numero">Número:</label>
        <p> <input type="number" name="numero" /></p>
        <!--Password-->
        <label for="pass">Password:</label>
        <p> <input type="password" name="pass" /></p>
        <!--Radio-button-->
        <label for="continente">¿De que continente accedes?:</label>
        <p> <input type="radio" name="continente" value="America del Sur" />America del Sur</p>
        <p> <input type="radio" name="continente" value="Europa" />Europa</p>
        <p> <input type="radio" name="continente" value="Asia" />Asia</p>
        <p> <input type="radio" name="continente" value="Africa" />Africa</p>
        <p> <input type="radio" name="continente" value="America del Norte" />America del Norte</p>
        <p> <input type="radio" name="continente" value="Antartida" />Antartida</p>
        <p> <input type="radio" name="continente" value="Oceania" />Oceania</p>
        <!--Textarea-->
        <textarea>Ecribe aquí...</textarea><br />
        <!--Select-->
        <select name="peliculas">
            <option value="La bella y la bestia">La bella y la bestia</option>
            <option value="La sirenita">La sirenita</option>
            <option value="Enredados">Enredados</option>
            <option value="La bella durmiente">La bella durmiente</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>