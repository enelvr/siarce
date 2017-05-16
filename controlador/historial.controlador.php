
<?php

if (isset($_POST["accion"])) $_GET["accion"] = $_POST["accion"];
switch ($_GET["accion"]){
case 1:
require_once 'modelo/historial.class.php';
include_once "class/clear.php";
if (isset($_GET['codigo'])){
$_POST['usuario']=$_GET['codigo'];
}
else{require('vista/error_accion.php'); }
$historial = Historial_archivos::buscarPorUA(clear($_POST['usuario']));
if($historial){ 
require('vista/historial/listar.php');
}
else
{
echo"<script type>
	alert('ESTE USUARIO AUN NO CUENTA CON UN HISTORIAL..');
	location='sircarch.php?modulo=5&accion=3';
	</script>";} 

break;
default:
        require('vista/error_accion.php'); 
        break;

}

?>
