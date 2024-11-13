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
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
    <script src="js/script.js"></script>

    <link rel="shortcut icon" href="assets/img/icons/favicon.ico"/>
    <title>Muse</title>
</head>

<body>
    <?php 
        include('includes/header.php');

        require_once "config/conexion.php";

        $nombre = $_SESSION['nombre'];   
        $apellidoUsuario = $_SESSION['apellido'];   
        $emailUsuario = $_SESSION['email'];  

        if(isset($_SESSION['id'])) {
            $id_pais = $_SESSION['pais'];
            $sql = "SELECT fn_retornar_pais('$id_pais')";
            $pais = conexion()->prepare($sql);
            $pais->execute();
            $pais =  $pais->fetchColumn();
        }
    ?>

    <main>
        <div id="perfil">
            <div id="perfil__superior">
                <img id="perfil__superior__foto" src="assets\img\icons\circle-user.svg">
                <p id="perfil__superior__usuario"><?php echo $nombreUsuario ?></p>
            </div>
            <div id="perfil__datos">
                <div class="perfil__datos__fila">
                    <p class="perfil__datos__fila__titulo">Nombre</p>
                    <p class="perfil__datos__fila__dato"><?php echo $nombre ?></p>
                </div>
                <div class="perfil__datos__fila">
                    <p class="perfil__datos__fila__titulo">Apellido</p>
                    <p class="perfil__datos__fila__dato"><?php echo $apellidoUsuario ?></p>
                </div>
                <div class="perfil__datos__fila">
                    <p class="perfil__datos__fila__titulo">Pais</p>
                    <p class="perfil__datos__fila__dato"><?php echo $pais ?></p>
                </div>
                <div class="perfil__datos__fila">
                    <p class="perfil__datos__fila__titulo">Correo</p>
                    <p class="perfil__datos__fila__dato"><?php echo $emailUsuario ?></p>
                </div>


            

            </div>
            <?php
                if(isset($_SESSION['id'])) {
                    $id_usuario = $_SESSION['id'];
                    $sql = "SELECT fn_usuario_es_premium('$id_usuario')";
                    $esPremium = conexion()->prepare($sql);
                    $esPremium->execute();
                }
            
                if ($esPremium->fetchColumn() > 0) {

                    echo '<div id="seccion-lyre">
                    <div class="top-lyre">
                        <p class="titulo-top">Tu top canciones</p>
                        <ul class="top-lyre__lista">';
                    
                    $canciones= conexion()->prepare("CALL spcanciones_mas_escuchadas('$id_usuario')"); 
                    $canciones->execute(); 
                    $canciones = $canciones->fetchAll(PDO::FETCH_ASSOC); 
                    
                    for ($x = 0; $x <= sizeof($canciones)-1; $x++) {
                        $top = ($canciones[$x]['titulo']);
                        echo '<li class="top-lyre__elemento">'.($x + 1).'. '.str_replace('"', "", $top).'</li>';
                    }

                    echo '                    </ul>
                    </div>';

                    echo '<div id="seccion-lyre">
                    <div class="top-lyre">
                        <p class="titulo-top">Tu top artistas</p>
                        <ul class="top-lyre__lista">';
                    
                    $canciones= conexion()->prepare("CALL spartistas_mas_escuchados('$id_usuario')"); 
                    $canciones->execute();  
                    $canciones = $canciones->fetchAll(PDO::FETCH_ASSOC);

                    for ($x = 0; $x <= sizeof($canciones)-1; $x++) {
                        $top = ($canciones[$x]['nombre']);
                        echo '<li class="top-lyre__elemento">'.($x + 1).'. '.str_replace('"', "", $top).'</li>';
                    }

                    echo '                    </ul>
                    </div>
                    </div>
                    </div>';
                } else {
                }
                
                ?>
        
            <div id="perfil__inferior">
                <div id="perfil__inferior__izquierda">
                </div>
                <div id="perfil__inferior__derecha">
                    <a href="config/cerrarsesion.php"><button id="perfil__inferior__izquierda__boton-eliminar">Cerrar Sesion</button></a>
                </div>
            </div>
        </div>


    </main>

    <!-- Footer de la Pagina -->
    <?php include('includes/footer.php') ?>
</body>

</html>