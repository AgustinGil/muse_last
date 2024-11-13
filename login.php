<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los derechos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="css/lib/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/script.js"></script>
    <script src="js/lib/jquery.js"></script>

    <link rel="shortcut icon" href="assets/img/icons/favicon.ico"/>
    <title>Muse</title>
</head>

<body>
    <main>
        <div id="autenticacion">
            <a href="index.php"><div id="autenticacion__logo"><img src="assets/img/icons/imagotipo.svg" title="Muse"></div></a>
            <div id="autenticacion__titulo">
                <h1>Inicio de Sesion</h1>
                <p id="autenticacion__titulo__sub">para acceder a tu cuenta de MUSE</p>
            </div>
            

            <form id="autenticacion__form" action="config/acceder.php" method="POST">
                <div class="autenticacion__form__campo">
                    <input type="text" id="usuario" name="usuario" class="autenticacion__form__campo__entrada" placeholder="Usuario" required>
                </div>
                <div id="msj_us-container" class="div__autenticacion__form__error"></div>

                <div class="autenticacion__form__campo">
                    <input type="password" id="contraseña" name="contraseña" class="autenticacion__form__campo__entrada" placeholder="Contraseña" required>
                </div>
                <div id="msj_cont-container" class="div__autenticacion__form__error"></div>

                <div class="autenticacion__redirecciones autenticacion__redirecciones__contraseña">
                    <a href="recuperacion.php">¿Olvidaste tu constraseña?</a>
                </div>
                
                <div id="autenticacion__form__contenedor-boton">
                    <input type="button" id="submit" name="submit" value="Iniciar Sesion" required>
                </div>
            </form>
            
            <div class="autenticacion__redirecciones autenticacion__registro">
                <p>¿No tienes una cuenta? <a href="registro.php">Registrate</a></p>
            </div>
        </div>
    </main>

    <!-- Footer de la Pagina -->
    <?php include('includes/footer.php') ?>

    <script src="js/validaciones.js"></script>
</body>

</html>