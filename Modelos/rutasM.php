<?php 

// ini_set('error_reporting', E_ALL|E_STRICT);
// ini_set('display_errors', '1');
class Modelo{

    static public function RutasModelo($rutas){
        
        if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "editar" || $rutas == "empleados" || $rutas == "salir"){
            
            $pagina = "Vistas/modulos/".$rutas.".php";

        }else if($rutas == "index"){
            
            $pagina = "Vistas/modulos/ingreso.php";

        }else{

            $pagina = "Vistas/modulos/ingreso.php";

        }
        
        return $pagina;
    }

}
