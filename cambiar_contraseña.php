
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los dere3chos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="css/lib/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/script.js"></script>
    <script src="js/lib/jquery.js"></script>
    

    <script src="js/lib/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="css/lib/sweetalert2.min.css">

    <script src="js/alertas.js"></script>

    <link rel="icon" href="assets/img/icons/favicon.ico">
    <title>Muse</title>
</head>
<body>
    <main>
        <div id="autenticacion">
            <a onclick="alerta()"><div id="autenticacion__logo"><img src="assets/img/icons/imagotipo.svg" title="Muse"></div></a>
            
            <div id="autenticacion__titulo">
                <h1 >Cambiar Contraseña</h1>
                <p id="autenticacion__titulo__sub">Ingrese su nueva contraseña</p>
            </div>

            <form id="autenticacion__form" action="config/cambiar.php" method='post'  >
                <div class="autenticacion__form__campo">
                    <input type="password" id="Acontraseña" name="Acontraseña" class="autenticacion__form__campo__entrada" placeholder="Antigua contraseña">
                </div>
                <div id="msj_contA-container" class="div__autenticacion__form__error"></div>

                <div class="autenticacion__form__campo">
                    <input type="password" id="contraseña" name="contraseña" class="autenticacion__form__campo__entrada" placeholder="Nueva contraseña">
                </div>
                <div id="msj_cont-container" class="div__autenticacion__form__error"></div>

                <div class="autenticacion__form__campo">
                    <input type="password" id="verif_contraseña" name="verif_contraseña" class="autenticacion__form__campo__entrada" placeholder="Verificar nueva contraseña">
                </div>
                <div id="msj_verif_cont-container" class="div__autenticacion__form__error"></div>
                
                <div id="autenticacion__form__contenedor-boton">
                    <input type="button" id="submit" name='submit'value="Cambiar" id="autenticacion__form__cont-b__boton" required>
                </div>
            </form>

            <div class="autenticacion__redirecciones autenticacion__registro">
                <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesion aqui</a></p>
            </div>
        </div>
    </main>

    <!-- Footer de la Pagina -->
    <?php include_once('includes/footer.php') ?>
    <script src="js/validaciones.js"></script>
</body>
</html>