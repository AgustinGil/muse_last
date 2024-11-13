<!DOCTYPE html>
    <html lang="es">
        <head>
        <meta charset="UTF-8">
        <meta name="authors" content="Grupo 5">
        <meta name="copyright" content="Conservamos los derechos de la página">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <script src="js/lib/jquery.js"></script>

        <link rel="stylesheet" type="text/css" href="css/lib/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/premium.css">
        <script src="js/lib/splide.min.js"></script>
        <script src="js/lib/sweetalert2.all.min.js"></script>

        <script src="js/alertas.js"></script>
        <script src="js/script.js"></script>

        <script src="https://www.paypal.com/sdk/js?client-id=AYhGTZJb2hZtqZC9DQOb5kEAlQ1-vkjQIBSE42aHrOOUJXb8gUIq6I9UZNcAxFgfLu8hk3h6XLAQClRb&currency=USD"></script>

        <link rel="shortcut icon" href="assets/img/icons/favicon.ico"/>
        <title>Muse</title>
    </head>

    <body>
        <?php include('includes/header.php') ?>
        <script>
            itemsMenu = document.getElementsByClassName('menu-inferior__item')

            itemsMenu[4].classList.remove('menu-inferior__item--activo')
            itemsMenu[0].classList.remove('menu-inferior__item--activo')
            itemsMenu[2].classList.remove('menu-inferior__item--activo')
            itemsMenu[6].classList.add('menu-inferior__item--activo')
        </script>

        <main>
            <div id="banner">
                <div id="banner__izquierda" >
                    <h1 id="banner__izquierda__titulo">Muse Lyre</h1>
                    <p id="banner__izquierda__parrafo">Por tan solo 1,99$ en un pago unico tendras acceso a Muse al completo</p>
                    <button id="banner__izquierda__boton" onclick="activaPaypal()">Empieza ya</button>
                    
                </div>
                <div id="banner__derecha">
                    <img src="assets\img\icons\isotipo-blanco.svg" draggable="false">
                </div>
            </div>


            <div id="detalles">
                <div class="detalles__item">
                    <div class="detalles__item__circulo">
                        <img class="detalles__item__circulo__icono" src="assets\img\icons\cloud-arrow-up-solid.svg" draggable="false">
                    </div>
                    <h2 class="detalles__titulo">Ve con claridad tu pasion por la musica</h2>
                    <p class="detalles__parrafo">Accede a tus estadisticas, tus canciones y artistas mas escuchados</p>
                </div>

                <div id="paypal-button-container" style="width: 30%;  margin-top:2rem;">
                    
                </div>
            </div>
        </main>

        <!-- Footer de la Pagina -->
        <?php include('includes/footer.php') ?>
    </body>

</html>