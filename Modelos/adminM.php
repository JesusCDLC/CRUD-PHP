<?php
require_once "conexionBD.php";

class AdminM extends conexionBD{

    static public function IngresoM($datosC, $tablaDB){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave FROM $tablaDB WHERE usuario = :usuario");
        $pdo = binParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();

    }

}