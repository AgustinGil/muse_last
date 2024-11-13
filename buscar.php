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
        <link rel="stylesheet" type="text/css" href="css/busqueda.css">
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

    <body>
        <?php include('includes/header.php') ?>
        <script>
            itemsMenu = document.getElementsByClassName('header__menu-central__item')

            itemsMenu[0].classList.remove('header__menu-central__item--activo')
            itemsMenu[1].classList.remove('header__menu-central__item--activo')
            itemsMenu[2].classList.add('header__menu-central__item--activo')
        </script>
        <script>
            itemsMenu = document.getElementsByClassName('menu-inferior__item')

            itemsMenu[0].classList.remove('menu-inferior__item--activo')
            itemsMenu[2].classList.remove('menu-inferior__item--activo')
            itemsMenu[6].classList.remove('menu-inferior__item--activo')
            itemsMenu[4].classList.add('menu-inferior__item--activo')
        </script>

        <main id="main">
            <section id="perico">
                <img src="assets/img/icons/elmejorlogo.svg">
            </section>

            <section class="vista-cancion">
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
            
            <div id="contenedor-barra">
                <input placeholder="Buscar..." id="barra-busqueda" type="text">
                <img id="lupa" title="Buscar" src="assets/img/icons/magnifying-glass-solid.svg" >
            </div>
            <div id="contenedor-resultado">

            </div>

                

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
    <script src="js/alertas.js"></script>
    <script src="js/crearEstructuraCanciones.js"></script>
    <script src="js/controlesReproductor.js"></script>
    <script src="js/cargarBusqueda.js"></script>
    <script src="js/lib/widgetapi.js"></script>
    </body>
</html>