<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="authors" content="Grupo 5">
    <meta name="copyright" content="Conservamos los derechos de la página">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link rel="stylesheet" type="text/css" href="css/lib/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="js/script.js"></script>
    
    <link rel="shortcut icon" href="assets/img/icons/favicon.ico">
    <link rel="icon" href="assets/img/icons/favicon.ico">
    <title>Muse</title>
</head>
<body>
    <header id="header">
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
                    <?php
                    session_start();
                    if (isset($_SESSION['usuario'])) {
                        echo '<a href="biblioteca.php" class="header__menu-central__item__link">Biblioteca</a>';
                    } else {
                        echo '<a class="header__menu-central__item__link" onclick="alerta_biblioteca()">Biblioteca</a>';
                    }
                    ?>
                    
                </li>
                <li class="header__menu-central__item">
                    <a href="buscar.php" class="header__menu-central__item__link">Buscar</a>
                </li>
            </ul>
        </nav>
    
        <?php
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
    </header>

    <section id="menu-inferior">
            <ul id="menu-inferior__lista">
                <li class="menu-inferior__item">
                    <a class="menu-inferior__item" href="biblioteca.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/book-bookmark.svg">
                        <?php
                            if (isset($_SESSION['usuario'])) {
                                echo '<a class="menu-inferior__item__link" onclick="alerta_biblioteca()">Biblioteca</a>';
                            } else {
                                echo '<a href="biblioteca.php" class="menu-inferior__item__link">Biblioteca</a>';
                            }
                        ?>
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

                <?php

                if (isset($_SESSION['usuario'])) {
                    echo '                <li class="menu-inferior__item">
                    <a class="menu-inferior__item" href="premium.php">
                        <img class="menu-inferior__item__icono filtro-blanco" src="assets/img/icons/Lyre Icon.svg">
                        <a href="premium.php" class="menu-inferior__item__link">Lyre</a>
                    </a>
                </li>';
                } 

                ?>

            </ul>
        </section>
</body>
</html>