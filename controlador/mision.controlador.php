<?php

if (isset($_POST["accion"]) AND  ((($_POST["accion"])==6) OR (($_POST["accion"])==7)))
{   $_GET["accion"] = $_POST["accion"];} 
switch ($_GET["accion"]) {

 case 1:
        require('vista/principal/mision.php'); 
        break;
case 2:
        require('vista/principal/vision.php'); 
        break;
case 3:
        require('vista/principal/organigrama.php'); 
        break;
case 4:
        require('vista/principal/ubicacion.php'); 
        break;
 default:
        require('vista/error_accion.php'); 
        break;


}


?>
