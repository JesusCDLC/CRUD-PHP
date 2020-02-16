<?php

class AdminC{
    public function IngresoC(){
        if (isset($_POST["usuarioi"])) {
            $datosC = array("usuario" => $_POST["usuarioi"], "clave" => $_POST["clavei"]);

            $tablaDB = "administradores";

            $respuesta = AdminM::IngresoM($datosC, $tablaDB);

            if ($respuesta["usuario"] == $_POST["usuarioi"] && $respuesta["clave"] == $_POST["clavei"]) {

                session_start();
                $_SESSION["ingreso"] == true;

                header("location:index.php?ruta=empleados");
            }else{
                echo "ERROR AL INGRESAR";
            }
        }
    }
}