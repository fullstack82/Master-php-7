<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de poemas</title>
</head>

<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                <h2>Blog de poemas</h2>
            </a>
        </div>
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Sobre nosotros</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
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
                    <input type="submit" value="Registrar" />
                </form>
            </div>
        </aside>

        <div class="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Me gusta cuando callas (Pablo Neruda)</h2>
                <p>
                    Me gustas cuando callas porque estás como ausente,
                    y me oyes desde lejos, y mi voz no te toca.
                    Parece que los ojos se te hubieran volado
                    y parece que un beso te cerrara la boca.

                    Como todas las cosas están llenas de mi alma
                    emerges de las cosas, llena del alma mía.
                    Mariposa de sueño, te pareces a mi alma,
                    y te pareces a la palabra melancolía.

                    Me gustas cuando callas y estás como distante.
                    Y estás como quejándote, mariposa en arrullo.
                    Y me oyes desde lejos, y mi voz no te alcanza:
                    déjame que me calle con el silencio tuyo.

                    Déjame que te hable también con tu silencio
                    claro como una lámpara, simple como un anillo.
                    Eres como la noche, callada y constelada.
                    Tu silencio es de estrella, tan lejano y sencillo.

                    Me gustas cuando callas porque estás como ausente.
                    Distante y dolorosa como si hubieras muerto.
                    Una palabra entonces, una sonrisa bastan.
                    Y estoy alegre, alegre de que no sea cierto.
                </p>
            </article>
            <article class="entrada">
                <h2>Amor constante más allá de la muerte (Francisco de Quevedo)</h2>
                <p>
                    Cerrar podrá mis ojos la postrera
                    Sombra que me llevare el blanco día,
                    Y podrá desatar esta alma mía
                    Hora, a su afán ansioso lisonjera;

                    Mas no de esotra parte en la ribera
                    Dejará la memoria, en donde ardía:
                    Nadar sabe mi llama el agua fría,
                    Y perder el respeto a ley severa.

                    Alma, a quien todo un Dios prisión ha sido,
                    Venas, que humor a tanto fuego han dado,
                    Médulas, que han gloriosamente ardido,

                    Su cuerpo dejará, no su cuidado;
                    Serán ceniza, mas tendrá sentido;
                    Polvo serán, mas polvo enamorado.
                </p>
            </article>
            <article class="entrada">
                <h2>A una rosa (Gongora)</h2>
                <p>
                    Cerrar podrá mis ojos la postrera
                    Sombra que me llevare el blanco día,
                    Y podrá desatar esta alma mía
                    Hora, a su afán ansioso lisonjera;

                    Mas no de esotra parte en la ribera
                    Dejará la memoria, en donde ardía:
                    Nadar sabe mi llama el agua fría,
                    Y perder el respeto a ley severa.

                    Alma, a quien todo un Dios prisión ha sido,
                    Venas, que humor a tanto fuego han dado,
                    Médulas, que han gloriosamente ardido,

                    Su cuerpo dejará, no su cuidado;
                    Serán ceniza, mas tendrá sentido;
                </p>
            </article>
            <article class="entrada">
                <h2>Ir y quedarse (Lope de Vega)</h2>
                <p>
                    Ir y quedarse, y con quedar partirse,
                    partir sin alma, y ir con alma ajena,
                    oír la dulce voz de una sirena
                    y no poder del árbol desasirse;

                    arder como la vela y consumirse,
                    haciendo torres sobre tierna arena;
                    caer de un cielo, y ser demonio en pena,
                    y de serlo jamás arrepentirse;

                    hablar entre las mudas soledades,
                    pedir prestada sobre fe paciencia,
                    y lo que es temporal llamar eterno;

                    creer sospechas y negar verdades,
                    es lo que llaman en el mundo ausencia,
                    fuego en el alma, y en la vida infierno.
                </p>
            </article>
        </div>
    </div>
</body>
<footer id="pie">
<p>Desarrolado por Maria Pinto &copy; 2021</p>
</footer>
</html>