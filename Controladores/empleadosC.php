<?php

class EmpleadorC{

    // REGISTAR LOS EMPLEADOS
    public function RegistrarEmpleados(){

        if (isset($_POST["nombreR"])) {
            
            $datosC = array("nombre" => $_POST["nombreR"], "apellido" => $_POST["apellidoR"], "email" => $_POST["emailR"], "puesto" => $_POST["puestoR"], "salario" => $_POST["salarioR"]);

            $tablaDB = "empleados";

            $respuesta = EmpleadosM::RegistarEmpleadosM($datosC, $tablaDB);

            if ($respuesta == "Bien") {
                header("location:index.php?ruta=empleados");
            }else{
                echo "error";
            }
        }

    }
    // MOSTAR LOS EMPLEADOS
    public function MostrarEmpleadosC(){

        $tablaDB = "empleados";
        $respuesta = EmpleadosM::MostrarEmpleadosM($tablaDB);

        foreach ($respuesta as $key => $value) {
            echo '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["apellido"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["puesto"].'</td>
                    <td>$ '.$value["salario"].'</td>

                    <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button>Editar</button></a></td>

                    <td><a href="index.php?ruta=empleados&idB='.$value["id"].'"><button>Borrar</button></a></td>
                </tr>';
        }
    }

// EDITAR EMPLEADOS

    public function EditarEmpleadoC(){

        $datosC = $_GET["id"];
        $tablaDB = "empleados";

        $respuesta = EmpleadosM::EditarEmpleadosM($datosC, $tablaDB);

        echo '<input type="hidden" value="'.$respuesta["id"].'" name="idE" required>
            <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

            <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellidoE" required>

            <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="emailE" required>

            <input type="text" placeholder="Puesto" value="'.$respuesta["puesto"].'" name="puestoE" required>

            <input type="text" placeholder="Salario" value="'.$respuesta["salario"].'" name="salarioE" required>

            <input type="submit" value="Actualizar">';
    }

    // ACTUALIZAR EMPLEADOS

    public function ActualizarEmpleadoC(){

        if (isset($_POST["nombreE"])) {

            $datosC = array("id" => $_POST["idE"], "nombre" => $_POST["nombreE"], "apellido" => $_POST["apellidoE"], "email" => $_POST["emailE"], "puesto" => $_POST["puestoE"], "salario" => $_POST["salarioE"]);

            $tablaDB = "empleados";
            
            $respuesta = EmpleadosM::ActualizarEmpleadoM($datosC,$tablaDB);

            if ($respuesta == "Bien") {
                header("location:index.php?ruta=empleados");
            }else{
                echo "error";
            }
        }

    }

    // ELIMINAR EMPLEADO

    public function BorrarEmpleadoC(){

        if (isset($_GET["idB"])) {
            
            $datosC = $_GET["idB"];
            $tablaDB = "empleados";

            $respuesta = EmpleadosM::BorrarEmpleadoM($datosC, $tablaDB);

            if ($respuesta == "Bien") {
                header("location:index.php?ruta=empleados");
            }else{
                echo "error";
            }
        }

    }

}