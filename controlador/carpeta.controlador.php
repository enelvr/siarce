<?php

if (isset($_POST["accion"])) $_GET["accion"] = $_POST["accion"];
switch ($_GET["accion"]){
case 1:
require_once 'modelo/archivo.class.php';


$archivo = Archivo::buscarPorC($_POST['archivo']);
$n_id=$_POST['notaremision_id'];
$buscar=$_POST['buscar'];
if($archivo){
require_once 'modelo/carpeta.class.php';
$carpeta = Carpeta::buscarPorC($_POST['archivo']);
	if($carpeta==null){
  require('vista/carpeta/mostrar.php');
			 }
elseif($carpeta !=null){header("Location: sircarch.php?modulo=7&accion=4&codigo=$buscar&arc=1");}

}
else
{

header("Location: sircarch.php?modulo=7&accion=4&codigo=$buscar&arc=1"); // Redirecionamos a Google
	
}
break;
case 2:
require_once 'modelo/carpeta.class.php';
$carpeta = Carpeta::buscarPorC($_POST['n']);
	if($carpeta){
  echo "<script type>
	alert('IMPOSIBLE ASOCIAR EL REGISTRO - YA ESTA ASOCIADO A UNA CARPETA O NO EXISTE ..');
	location='sircarch.php?modulo=6&accion=1';
	</script>";
 }

else{
$carpeta= new Carpeta ($_POST["notaremision_id"], $_POST["n"], $_POST["carpeta"], $_POST["contenido"]);
	$carpeta->guardar();
require_once 'modelo/nota.class.php';
$notaremision = Notaremision::buscarPorC($_POST['buscar']);
	require('vista/nota/mostrar.php');
	
}
break;
case 3:
require_once 'modelo/archivo.class.php';
$archivo = Archivo::buscarPorCA($_POST['archivo'], $_POST['tipoubicacion_id']);
$n_id=$_POST['notaremision_id'];
$buscar=$_POST['buscar'];
if($archivo){

require('vista/carpeta/mostraroperador.php');
	}
else
{
  echo "<script type>
	alert('IMPOSIBLE ASOCIAR EL REGISTRO - YA ESTA ASOCIADO A UNA CARPETA O NO EXISTE ..');
	location='sircarch.php?modulo=6&accion=1';
	</script>";


}

break;
case 4:


require_once 'modelo/carpeta.class.php';
$carpeta = Carpeta::buscarPorC($_POST['n']);
	if($carpeta){
  echo "<script type>
	alert('IMPOSIBLE ASOCIAR EL REGISTRO - YA ESTA ASOCIADO A UNA CARPETA O NO EXISTE ..');
	location='sircarch.php?modulo=6&accion=1';
	</script>";
 }

else{
$carpeta= new Carpeta ($_POST["notaremision_id"], $_POST["n"], $_POST["carpeta"], $_POST["contenido"]);
	$carpeta->guardar();
require_once 'modelo/nota.class.php';
$notaremision = Notaremision::buscarPorC($_POST['buscar']);
	require('vista/nota/mostraroperador.php');
	
}
 break;

case 5:


require_once 'modelo/carpeta.class.php';
$carpeta = Carpeta::buscarPorC($_POST['n']);
	if($carpeta){
  echo "<script type>
	alert('IMPOSIBLE ASOCIAR EL REGISTRO - YA ESTA ASOCIADO A UNA CARPETA O NO EXISTE ..');
	location='sircarch.php?modulo=6&accion=1';
	</script>";
 }

else{
$carpeta= new Carpeta ($_POST["notaremision_id"], $_POST["n"], $_POST["carpeta"], $_POST["contenido"]);
	$carpeta->guardar();
require_once 'modelo/nota.class.php';
$notaremision = Notaremision::buscarPorC($_POST['buscar']);
	require('vista/nota/mostraroperador.php');
	
}
break;
default:
        require('vista/error_accion.php'); 
        break;

}

?>
