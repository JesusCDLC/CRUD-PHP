<?php 

    class Modelo{

        static public function RutasModelos($rutas){
            
            if ($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "salir") {
                
                $pagina = "Vistas/modulos/" . $rutas . ".php";
            }elseif ($rutas == "index") {
                
                $pagina = "Vistas/modulos/registrar.php";
            }else{
                $pagina = "Vistas/modulos/registrar.php";

            }
            
            return $pagina;
        }

    }

?>