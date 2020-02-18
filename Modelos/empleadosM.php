<?php

require_once "conexionBD.php";

class EmpleadosM extends ConexionBD{

    // REISTAR EMPLEADOS
    static public function RegistarEmpleadosM($datosC, $tablaDB){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaDB (nombre, apellido, email, puesto, salario) VALUES (:nombre, :apellido, :email, :puesto, :salario)");

        $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo->bindParam(":email", $datosC["email"], PDO::PARAM_STR);
        $pdo->bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
        $pdo->bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

        if ($pdo->execute()) {

            return "Bien";

        }else{

            return "Error";
        }

        $pdo->close();

    }

    // MOSTRAR EMPLEADOS

    static public function MostrarEmpleadosM($tablaDB){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaDB");
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();

    }

    // EDITAR EMPLEADOS

    static public function EditarEmpleadosM($datosC, $tablaDB){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaDB WHERE id = :id");
        $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();
        
    }

    // ACTUALIZAR EMPLEADOS

    static public function ActualizarEmpleadoM($datosC,$tablaDB){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaDB SET nombre = :nombre, apellido = :apellido, email = :email, puesto = :puesto, salario = :salario WHERE id = :id");
        
        $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo->bindParam(":email", $datosC["email"], PDO::PARAM_STR);
        $pdo->bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
        $pdo->bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

        if ($pdo->execute()) {

            return "Bien";

        }else{

            return "Error";
        }

        $pdo->close();
    }

    // BORRAR EMPLEADOS

    static public function BorrarEmpleadoM($datosC, $tablaDB){

        $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaDB WHERE id = :id");

        $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);

        if ($pdo->execute()) {

            return "Bien";

        }else{

            return "Error";
        }

        $pdo->close();
    }

}