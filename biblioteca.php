<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="authors" content="Grupo 5">
        <meta name="copyright" content="Conservamos los derechos de la página">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/busqueda.css">
        <link rel="stylesheet" type="text/css" href="css/biblioteca.css">

        <script src="js/lib/jquery.js"></script>

        <script src="js/lib/splide.min.js"></script>
        <script src="js/lib/sweetalert2.all.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/lib/normalize.css">
        <link rel="stylesheet" href="css/lib/splide.min.css">
        <link rel="stylesheet" href="css/lib/sweetalert2.min.css">

        <script src="js/script.js"></script>
        
        <link rel="shortcut icon" href="assets/img/icons/favicon.ico">
        <link rel="icon" href="assets/img/icons/favicon.ico">
        <title>Muse</title>
        
    </head>


    <header id="header">
        <div class="header-superior">
            <div id="header__logo">
                <a href="index.php"><img src="assets/img/icons/imagotipo-blanco.svg" title="Muse"></a>
            </div>
            <div id="header__logo-secundario">
                <a href="index.php"><img src="assets/img/icons/isotipo-blanco.svg" title="Muse"></a>
            </div>
        
        
            <nav id="header__menu-central">
                <ul>
                    <li class="header__menu-central__item header__menu-central__item--activo">
                        <a href="index.php" class="header__menu-central__item__link">Inicio</a>
                    </li>
                    <li class="header__menu-central__item">
                        <a href="" class="header__menu-central__item__link">Biblioteca</a>
                    </li>
                    <li class="header__menu-central__item">
                        <a href="buscar.php" class="header__menu-central__item__link">Buscar</a>
                    </li>
                    
                </ul>
            </nav>
        
            <?php
            session_start();
                        if (isset($_SESSION['usuario'])) {
                            // El usuario ha iniciado sesión, muestra el nombre de usuario u otra información
                            $nombreUsuario = $_SESSION['usuario'];
                            ?>
            <div id="header__usuario" onclick="desplegarMenuUsuario()">
        
                <img id="header__usuario__icono__secundario" class="filtro-blanco" src="assets/img/icons/drop_down_menu.svg">
                <?php echo '<p id="nombre_us">'.$nombreUsuario.'</p>' ?>
                <img class="header__usuario__icono" src="assets/img/icons/circle-user.svg">
        
                <nav id="header__usuario__menu">
                    <ul>
                        <a class="header__usuario__menu__item__link" href="perfil.php"><li class="header__usuario__menu__item">Perfil</li></a>
                        <a href="premium.php" class="header__usuario__menu__item__link"><li class="header__usuario__menu__item">Muse Lyre</li></a>
                        <a href="config/cerrarsesion.php" class="header__usuario__menu__item__link"><li class="header__usuario__menu__item">Cerrar Sesion</li></a>
                    </ul>
                </nav>
        
            </div>
            <?php
                        } else {
                            ?>
            <div id="header__sin-iniciar">
                <a href="registro.php"><button id="header__usuario__crear-cuenta">Registrarse</button></a>
                <a href="login.php"><button id="header__usuario__iniciar-sesion">Iniciar Sesion</button></a>
            </div>
            <?php
                        }
                    ?>  
        </div>
        
        <div class="header-inferior">
            <nav class="header__menu-central-inferior">
                <ul>
                    <li class="header__menu-central__item header__menu-central__item--activo header-inferior__item">
                        <a class="header__menu-central__item__link header-inferior__link" onclick="cambiarSeccionBiblioteca(0)">Favoritos</a>
                    </li>
                    <li class="header__menu-central__item header-inferior__item">
                        <a class="header__menu-central__item__link header-inferior__link" onclick="cambiarSeccionBiblioteca(1)">Historial</a>
                    </li>
                </ul>
            </nav>
        </div>    
        
    </header>
        <script>
            itemsMenu = document.getElementsByClassName('header__menu-central__item')

            itemsMenu[0].classList.remove('header__menu-central__item--activo')
            itemsMenu[1].classList.add('header__menu-central__item--activo')
        </script>

        <main id="main">
            <section class="vista-cancion" style="height: 70%">
                <div data-video=""
                    data-autoplay="0"
                    data-loop="1"
                    activo="0"
                    id="youtube-audio">
                </div>
                <div>
                    <p class="vista-cancion__nombre">Nombre cancion</p>
                    <p class="vista-cancion__artista">Nombre artista</p>
                </div>
            </section>

            <section id="seccion-resultado-biblioteca">

            </section>

            <!-- Footer de la Pagina -->
            <?php include('includes/footer.php') ?>
        </main>

        
        
        <section class="barra-inferior">
                <div class="contenedor-imagen-actual" onclick="activarVistaCancion()">
                    <img id="imagen-actual" src="assets/img/icons/default_imagen.svg">
                </div>
            
                <div class="texto-actual" onclick="activarVistaCancion()">
                    <a id="cancion-actual"></a>
                    <p id="artista-actual"></p>
                </div>

                <img class="corazon" class="diablo" src="assets/img/icons/heart-regular.svg" >
                
                <div class="zona-reproductor">
                    <div id="timeline__container">
                        <p id="tiempo-actual">0:00</p>
                        <input type="range" id="barra-cancion" class="timeline" max="100" value="0" oninput="cambiarBarra()">
                        <p id="tiempo-total">0:00</p>
                    </div>
                    
                    <div class="controls">
                        <button class="player-button-play">
                            <img id="play" src="assets/img/icons/boton-play.svg">
                        </button>
                        <button class="player-button">
                            <img id="repeat" src="assets/img/icons/boton-repeat.svg">
                        </button>
                    </div>
                    <audio id="reproductor-de-audio">
                        <source id="fuente-audio" src="" type="audio/mp3">
                    </audio>
                </div>
                <div id="volumen">
                    <button class="player-button speaker">
                        <img id="speaker-img" src="assets/img/icons/Speaker_Icon-on.svg">
                    </button>
                    <input type="range" id="barra-sonido" class="timeline" max="100" value="100" oninput="cambiarBarraSonido()">
                </div>
    </section>

    <section id="menu-inferior">
            <ul id="menu-inferior__lista">
                <li class="menu-inferior__item">
                    <a class="menu-inferior__item" href="biblioteca.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/book-bookmark.svg">
                        <a href="biblioteca.php" class="menu-inferior__item__link">Biblioteca</a>
                    </a>
                </li>
                <li class="menu-inferior__item menu-inferior__item--activo">
                    <a class="menu-inferior__item" href="index.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/house-solid.svg">
                        <a href="index.php" class="menu-inferior__item__link">Inicio</a>
                    </a>
                </li>
                <li class="menu-inferior__item">
                    <a class="menu-inferior__item" href="buscar.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/magnifying-glass-solid.svg">
                        <a href="buscar.php" class="menu-inferior__item__link">Buscar</a>
                    </a>
                </li>
                <li class="menu-inferior__item">
                    <a class="menu-inferior__item" href="premium.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/Lyre Icon.svg">
                        <a href="premium.php" class="menu-inferior__item__link">Lyre</a>
                    </a>
                </li>
            </ul>
        </section>

        <script>
            itemsMenu = document.getElementsByClassName('menu-inferior__item')

            itemsMenu[4].classList.remove('menu-inferior__item--activo')
            itemsMenu[2].classList.remove('menu-inferior__item--activo')
            itemsMenu[6].classList.remove('menu-inferior__item--activo')
            itemsMenu[0].classList.add('menu-inferior__item--activo')
        </script>

    <script src="js/crearEstructuraCanciones.js"></script>
    <script src="js/controlesReproductor.js"></script>
    <script src="js/cargarBiblioteca.js"></script>
    <script src="js/lib/widgetapi.js"></script>
    </body>
</html>