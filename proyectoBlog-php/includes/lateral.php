<?php require_once './includes/helpers.php'; ?>
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="password" />
            <label for="password">Password</label>
            <input type="password" name="password" />
            <input type="submit" value="Entrar" />
        </form>
    </div>

    <div id="register" class="bloque">
        <?php if (isset($_SESSION['errores'])) :  ?>
        <?php endif; ?>
        <h3>Registrate</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">


            <label for="email">Email</label>
            <input type="email" name="email" />


            <label for="password">Password</label>
            <input type="password" name="password" />


            <input type="submit" name="submit" value="Registrar" />
        </form>
            
    </div>
</aside>