<?php

if (isset($_POST["modulo"])) $_GET["modulo"] = $_POST["modulo"];
switch ($_GET["modulo"]) {
    case 1:
        include('controlador/mision.controlador.php');
        break;
    case 2:
        include('controlador/mision.controlador.php');
        break;
    case 3:
        include('controlador/mision.controlador.php');
        break;
    case 4:
        include('controlador/login.controlador.php');
        break;
    case 5:
        include('controlador/usuario.controlador.php');
        break;
     case 6:
        include('controlador/archivo.controlador.php');
        break;
     case 7:
        include('controlador/nota.controlador.php');
        break;
     case 8:
        include('controlador/carpeta.controlador.php');
        break;
	 case 9:
        include('controlador/historial.controlador.php');
        break;
default:
    require('vista/error_modulo.php'); 
    break;
}
?>
