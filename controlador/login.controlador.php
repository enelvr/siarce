<?php

if (isset($_POST["accion"]) AND  ((($_POST["accion"])==6) OR (($_POST["accion"])==7)))
{   $_GET["accion"] = $_POST["accion"];} 
switch ($_GET["accion"]) {

 case 1:
        require('vista/login/login.php'); 
        break;

 default:
        require('vista/error_accion.php'); 
        break;


}


?>
