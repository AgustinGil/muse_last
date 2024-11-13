<?php 
    require_once "config/conexion.php";

    function obtener_pais() {
        $sql = "SELECT id_pais, nombre FROM paises";
        $obtener_paises = conexion()->prepare($sql);
        $obtener_paises->execute();
        echo '<div class="autenticacion__form__campo">';
            echo '<select id="pais" name="pais" class="autenticacion__form__campo__entrada dropdown-pais">';
                foreach($obtener_paises->fetchAll() as $resultado) {
                    echo '<option value="' . $resultado['id_pais'] . '">' . $resultado['nombre'] . '</option>';
                }
            echo '</select>';
        echo '</div>';
    }