<?php

if (isset($_POST["accion"])) $_GET["accion"] = $_POST["accion"];
switch ($_GET["accion"]){
	case 1:
if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	function codigo($longitud) {
 	$key = '';
	 $pattern = '1234567890';
 	$max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
 	$fecha = Date('Y-m-d');
	require_once 'modelo/piso.class.php';
	$piso = Piso::recuperarTodos();
	require_once 'modelo/area.class.php';
	$area = Area::recuperarTodos();
	require_once 'modelo/tipoubicacion.class.php';
	$tipoubicacion = Tipoubicacion::recuperarTodos();
	require('vista/nota/nuevo.php');


break;
	case 2:
	if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	require_once 'modelo/carpeta.class.php';
	require_once 'modelo/nota.class.php';
	$notaremision = Notaremision::buscarPorC($_POST['codigo']);
	if($notaremision){
  echo "<script type>
	alert('IMPOSIBLE HACER UN NUEVO REGISTRO...');
	location='sircarch.php?modulo=7&accion=1';
	</script>";
 }
	else{/*$_POST["o0"], $_POST["o1"], $_POST["o2"], $_POST["o3"], $_POST["o4"], $_POST["o5"], $_POST["o6"], $_POST["o7"], $_POST["o8"], $_POST["o9"],*/
	$notaremision = new Notaremision ($_POST["codigo"], $_POST["fregistro"], $_POST["destinatario"], $_POST["aread"], $_POST["pisod"], $_POST["remitente"], $_POST["arear"], $_POST["pisor"], $_POST["observacion"], $_POST["tipoubicacion_id"]);
	$notaremision->guardar();
$notaremision = Notaremision::buscarPorI($_POST['codigo']);
$idr=$notaremision->getId();
if ($_POST["o0"]=="1"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o0"]);
	$notarob->guardar();
}

if ($_POST["o1"]=="2"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o1"]);
	$notarob->guardar();
}

if ($_POST["o2"]=="3"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o2"]);
	$notarob->guardar();
}

if ($_POST["o3"]=="4"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o3"]);
	$notarob->guardar();
}

if ($_POST["o4"]=="5"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o4"]);
	$notarob->guardar();
}

if ($_POST["o5"]=="6"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o5"]);
	$notarob->guardar();
}
if ($_POST["o6"]=="7"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o6"]);
	$notarob->guardar();
}
if ($_POST["o7"]=="8"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o7"]);
	$notarob->guardar();
}
if ($_POST["o8"]=="9"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o8"]);
	$notarob->guardar();
}
if ($_POST["o9"]=="10"){
require_once 'modelo/notarob.class.php';

	$notarob= new Notarob ($idr, $_POST["o9"]);
	$notarob->guardar();
}
$notaremision = Notaremision::buscarPorC($_POST['codigo']);
require('vista/nota/mostrar.php');
}

	break;
	case 3:if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	require('vista/nota/buscar.php');

	break;
	case 4:if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	function codigo($longitud) {
 	$key = '';
	 $pattern = '1234567890';
 	$max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	$fecha = Date('d-m-Y');	
	include_once "class/clear.php";
if (isset($_GET['codigo'])){

$_POST['buscar']=$_GET['codigo'];
}
	require_once 'modelo/nota.class.php';
	$notaremision = Notaremision::buscarPorC($_POST['buscar']);
	if($notaremision){
	require('vista/nota/mostrar.php');
	}
else{
   echo "<script type>
	alert('EL REGISTRO SOLICITADO NO EXISTE...');
	</script>";
	$notaremision = Notaremision::recuperarTodos();
require('vista/nota/listar.php');
	}

	break;
	case 5: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	require('vista/nota/buscaroperador.php');

	break;
	case 6: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	function codigo($longitud) {
 	$key = '';
	 $pattern = '1234567890';
 	$max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	$fecha = Date('d-m-Y');	
	require_once 'modelo/nota.class.php';
	$notaremision = Notaremision::buscarPorCA($_POST['buscar'], $_POST['tipoubicacion_id']);
	if($notaremision){
	require('vista/nota/mostraroperador.php');
	}
else{
   echo "<script type>
	alert('EL REGISTRO SOLICITADO NO EXISTE...');
	location='mpppm.php';
	</script>";
	
	}



	break;
	case 7: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	function codigo($longitud) {
 	$key = '';
	 $pattern = '1234567890';
 	$max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
 	$fecha = Date('Y-m-d');
	require_once 'modelo/piso.class.php';
	$piso = Piso::recuperarTodos();
	require_once 'modelo/area.class.php';
	$area = Area::recuperarTodos();
	require_once 'modelo/tipoubicacion.class.php';
	$tipoubicacion = Tipoubicacion::recuperarTodos();
	require('vista/nota/nuevooperador.php');
	break;
	case 8: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
require_once 'modelo/nota.class.php';
	$notaremision = Notaremision::buscarPorI($_GET['codigo']);
if($notaremision){
	require('vista/nota/editar.php');
}
	break;
	case 9: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
require_once 'modelo/nota.class.php';
$id=$_POST["id"];
$notaremision = new Notaremision ($_POST["codigo"], $_POST["fregistro"], $_POST["destinatario"], $_POST["aread"], $_POST["pisod"], $_POST["remitente"], $_POST["arear"], $_POST["pisor"], $_POST["observacion"], $_POST["tipoubicacion_id"], $_POST["id"]);
	$notaremision->guardar();
require_once 'modelo/notarob.class.php';
 $notarob = Notarob::buscarPorInota($_POST['id']);        
         $notarob->eliminar();

if ($_POST["o0"]=="1"){


	$notarob= new Notarob ($id, $_POST["o0"]);
	$notarob->guardar();
}

if ($_POST["o1"]=="2"){

	$notarob= new Notarob ($id, $_POST["o1"]);
	$notarob->guardar();
}

if ($_POST["o2"]=="3"){

	$notarob= new Notarob ($id, $_POST["o2"]);
	$notarob->guardar();
}

if ($_POST["o3"]=="4"){

	$notarob= new Notarob ($id, $_POST["o3"]);
	$notarob->guardar();
}

if ($_POST["o4"]=="5"){

	$notarob= new Notarob ($id, $_POST["o4"]);
	$notarob->guardar();
}

if ($_POST["o5"]=="6"){

	$notarob= new Notarob ($id, $_POST["o5"]);
	$notarob->guardar();
}
if ($_POST["o6"]=="7"){

	$notarob= new Notarob ($id, $_POST["o6"]);
	$notarob->guardar();
}
if ($_POST["o7"]=="8"){

	$notarob= new Notarob ($id, $_POST["o7"]);
	$notarob->guardar();
}
if ($_POST["o8"]=="9"){

	$notarob= new Notarob ($id, $_POST["o8"]);
	$notarob->guardar();
}
if ($_POST["o9"]=="10"){

	$notarob= new Notarob ($id, $_POST["o9"]);
	$notarob->guardar();
}

$notaremision = Notaremision::buscarPorI($_POST['codigo']);

require('vista/nota/editar.php');
	break;
case 10: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
require_once 'modelo/nota.class.php';
	$notaremision = Notaremision::buscarPorI($_POST['codigo']);
if($notaremision){
	require('vista/nota/editaroperador.php');
}
	break;
case 11: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
require_once 'modelo/nota.class.php';
$id=$_POST["id"];
$notaremision = new Notaremision ($_POST["codigo"], $_POST["fregistro"], $_POST["destinatario"], $_POST["aread"], $_POST["pisod"], $_POST["remitente"], $_POST["arear"], $_POST["pisor"], $_POST["o0"], $_POST["o1"], $_POST["o2"], $_POST["o3"], $_POST["o4"], $_POST["o5"], $_POST["o6"], $_POST["o7"], $_POST["o8"], $_POST["o9"],$_POST["observacion"], $_POST["tipoubicacion_id"], $_POST["id"]);
	$notaremision->guardar();
$notaremision = Notaremision::buscarPorI($_POST['codigo']);
require('vista/nota/editaroperador.php');
	break;
case 12: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
require_once 'modelo/nota.class.php';
$notaremision = Notaremision::recuperarTodos();
require('vista/nota/listar.php');
break;
case 13: if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
$tipoubicacion_id=$_GET["area"];
require_once 'modelo/nota.class.php';
$notaremision = Notaremision::recuperarTodosArea($tipoubicacion_id);
require('vista/nota/arealistar.php');
break;

default:
        require('vista/error_accion.php'); 
        break;

}

?>
