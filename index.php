<?php 

// ini_set('error_reporting', E_ALL|E_STRICT);
// ini_set('display_errors', '1');

require_once "Controladores/rutasC.php";
require_once "Controladores/adminC.php";
require_once "Controladores/empleadosC.php";


require_once "Modelos/rutasM.php";
require_once "Modelos/adminM.php";
require_once "Modelos/empleadosM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();

?>