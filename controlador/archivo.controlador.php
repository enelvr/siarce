<?php

/* ACCIONES 
     * 2 = guardarN
     * 1 = nuevo
     * 3 = listado
     * 4 = mostrar
     * 5 = eliminar
     * 6 = editar
     * 7 = guardarE
     */

if (isset($_POST["accion"])) $_GET["accion"] = $_POST["accion"];
switch ($_GET["accion"]){
	case 1:
	function codigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
 	$fecha = Date('Y-m-d');
	$hora =  Date('H:i:s');
	require_once 'modelo/tipologia.class.php';
	$tipologia = Tipologia::recuperarTodos();
	require_once 'modelo/tradiccion.class.php';
	$tradiccion = Tradiccion::recuperarTodos();
	require_once 'modelo/tipoubicacion.class.php';
	$tipoubicacion = Tipoubicacion::recuperarTodos();
        require('vista/archivo/nuevo.php'); 
        break;

	case 2:
if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
	function imagen($img) {
 $key = '';
 $pattern = '1234567890qwertyuiopasdfghjklzxcvbnm';
 $max = strlen($pattern)-1;
 for($i=0;$i < $img;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
	$arnombre=$_FILES["narchivo"]["name"];//nombre
	if($arnombre==""){
	$url="";
	$_POST["url"]=$url;
	}
	else{
	$artamano=$_FILES["narchivo"]["size"];//tamaño
	$artempor=$_FILES["narchivo"]["tmp_name"];//temporal
	$destino='upload';//carpeta donde se guarda
	$generar=imagen(20);
	$url=$fecha.$generar.$_FILES['narchivo']['name'];
	$_POST["url"]=$url;
	copy($artempor,$destino.'/'.$fecha.$generar.$_FILES['narchivo']['name']);//guardando a la carpeta
	}
	
	require_once 'modelo/archivo.class.php';
	$archivo = Archivo::buscarPorC($_POST['n']);
	if($archivo){
  echo "<script type>
	alert('IMPOSIBLE HACER UN NUEVO REGISTRO...');
	location='sircarch.php?modulo=6&accion=1';
	</script>";
 }else{
	$archivo= new Archivo ($_POST["n"], $_POST["fregistro"], $_POST["destino"], $_POST["remitente"], $_POST["dependencia"], $_POST["finforme"], $_POST["contenido"], $_POST["tipologia_id"], $_POST["tradiccion_id"], $_POST["danexo"], $_POST["piezas"], $_POST["observacion"], $_POST["ubicacion"], $_POST["usuario"], $_POST["hora"], $_POST["url"], $_POST["tipoubicacion_id"]);
	$archivo->guardar();
$archivo = Archivo::buscarPorC($_POST['n']);
require('vista/archivo/mostrar.php');
}
	break;


	case 3:

	require('vista/reportes/fecha.php');
	break;
	case 4:
include_once "class/clear.php";
if(isset($_POST['area'])) {
$area=$_POST['area'];}
if(isset($_GET['area'])) {
$area=$_GET['area'];}
if (isset($_GET['codigo'])){

$_POST['buscar']=$_GET['codigo'];
}
require_once 'modelo/archivo.class.php';
	$archivo = Archivo::buscarPorC($_POST['buscar']);
	if($archivo){
	require('vista/archivo/mostrar.php');
	}
else
{
require('vista/error_accion.php'); 
}
	break;
	case 5:
include_once "class/clear.php";
if (isset($_GET['codigo'])){

$_POST['buscar']=$_GET['codigo'];
$_POST['cdigo']=$_GET['cdigo'];
}
	require_once 'modelo/archivo.class.php';
	$archivo = Archivo::buscarPorC(clear($_POST['buscar']));
	if($archivo){
	require('vista/archivo/mostrar.php');
	}
else{
   echo "<script type>
	alert('EL ARCHIVO SOLICITADO NO EXISTE EL REGISTRO...');
	</script>";
	$historial = Historial_archivos::buscarPorUA(clear($_POST['cdigo']));
require('vista/historial/listar.php');
	}
 break;
	case 6:

	require('vista/archivo/buscaroperador.php');
	break;
	case 7:
	require_once 'modelo/archivo.class.php';
	$archivo = Archivo::buscarPorCA($_POST['buscar'], $_POST['arce']);
	if($archivo){
	require('vista/archivo/mostrar.php');
	}
else{
   echo "<script type>
	alert('EL ARCHIVO SOLICITADO NO EXISTE EL REGISTRO...');
	location='mpppm.php';
	</script>";
	
	}

	break;
case 8:
	function codigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
 	$fecha = Date('Y-m-d');
	$hora =  Date('H:i:s');
	require_once 'modelo/tipologia.class.php';
	$tipologia = Tipologia::recuperarTodos();
	require_once 'modelo/tradiccion.class.php';
	$tradiccion = Tradiccion::recuperarTodos();
	require_once 'modelo/tipoubicacion.class.php';
	$tipoubicacion = Tipoubicacion::recuperarTodos();
        require('vista/archivo/nuevo.php'); 
        break;
case 9:
	function imagen($img) {
 $key = '';
 $pattern = '1234567890qwertyuiopasdfghjklzxcvbnm';
 $max = strlen($pattern)-1;
 for($i=0;$i < $img;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}	
	$arnombre=$_FILES["narchivo"]["name"];//nombre
	if($arnombre==""){
	$url="";
	$_POST["url"]=$url;
	}
	else{
	$artamano=$_FILES["narchivo"]["size"];//tamaño
	$artempor=$_FILES["narchivo"]["tmp_name"];//temporal
	$destino='upload';//carpeta donde se guarda
	$generar=imagen(20);
	$url=$fecha.$generar.$_FILES['narchivo']['name'];
	$_POST["url"]=$url;
	copy($artempor,$destino.'/'.$fecha.$generar.$_FILES['narchivo']['name']);//guardando a la carpeta
	}
	
	require_once 'modelo/archivo.class.php';
	$archivo = Archivo::buscarPorC($_POST['n']);
	if($archivo){
  echo "<script type>
	alert('IMPOSIBLE HACER UN NUEVO REGISTRO...');
	location='sircarch.php?modulo=6&accion=8&arce=2';
	</script>";
 }else{
	$archivo= new Archivo ($_POST["n"], $_POST["fregistro"], $_POST["destino"], $_POST["remitente"], $_POST["dependencia"], $_POST["finforme"], $_POST["contenido"], $_POST["tipologia_id"], $_POST["tradiccion_id"], $_POST["danexo"], $_POST["piezas"], $_POST["observacion"], $_POST["ubicacion"], $_POST["usuario"], $_POST["hora"], $_POST["url"], $_POST["tipoubicacion_id"]);
	$archivo->guardar();
$archivo = Archivo::buscarPorC($_POST['n']);
require('vista/archivo/mostrarperador.php');
}
	break;
	case 10:
	require_once 'modelo/archivo.class.php';
include_once "class/clear.php";
if(isset($_POST['area'])) { $area=$_POST['area'];}
if(isset($_GET['area'])) {$area=$_GET['area'];}

if (isset($_GET['codigo'])){

$_POST['codigo']=$_GET['codigo'];
}
$archivo = Archivo::buscarPorI(clear($_POST['codigo']));
if($archivo){
	require('vista/archivo/editar.php');
}
else
{
require('vista/error_accion.php'); 
}
	break;
	case 11:
require_once 'modelo/archivo.class.php';
if(isset($_POST['area'])) { $area=$_POST['area'];}
if(isset($_GET['area'])) {$area=$_GET['area'];}
$id=$_POST["id"];
$archivo= new Archivo ($_POST["n"], $_POST["fregistro"], $_POST["destino"], $_POST["remitente"], $_POST["dependencia"], $_POST["finforme"], $_POST["contenido"], $_POST["tipologia_id"], $_POST["tradiccion_id"], $_POST["danexo"], $_POST["piezas"], $_POST["observacion"], $_POST["ubicacion"], $_POST["usuario"], $_POST["hora"], $_POST["url"], $_POST["tipoubicacion_id"], $_POST["id"]);
	$archivo->guardar();

$archivo = Archivo::buscarPorC($_POST['n']);
 require('vista/archivo/mostrar.php');
	break;
	case 12:
require_once 'modelo/archivo.class.php';
$archivo = Archivo::buscarPorF($_POST['f1'],$_POST['f2']);
if($archivo){ require('vista/reportes/fmostrar.php');}
else{echo"<script type>
	alert('NO HAY REGISTRO EN LA FECHA SELECCIONADA..');
	location='sircarch.php?modulo=6&accion=3';
	</script>";}
	break;
	case 13:
	require_once 'modelo/archivo.class.php';
$archivo = Archivo::buscarPorU($_POST['usuario']);
if($archivo){ require('vista/reportes/umostrar.php');}
else{echo"<script type>
	alert('NO HAY REGISTRO DEL USUARIO..');
	location='sircarch.php?modulo=5&accion=8';
	</script>";}
	break;
case 14:
	require_once 'modelo/archivo.class.php';

	$archivo = Archivo::buscarPorI($_POST['codigo']);
if($archivo){
	require('vista/archivo/editaroperador.php');
}
	break;
case 15:
require_once 'modelo/archivo.class.php';
$id=$_POST["id"];
$archivo= new Archivo ($_POST["n"], $_POST["fregistro"], $_POST["destino"], $_POST["remitente"], $_POST["dependencia"], $_POST["finforme"], $_POST["contenido"], $_POST["tipologia_id"], $_POST["tradiccion_id"], $_POST["danexo"], $_POST["piezas"], $_POST["observacion"], $_POST["ubicacion"], $_POST["usuario"], $_POST["hora"], $_POST["url"], $_POST["tipoubicacion_id"], $_POST["id"]);
	$archivo->guardar();
 $archivo = Archivo::buscarPorI($_POST['n']);
 require('vista/archivo/editaroperador.php');
	break;
case 16:
require_once 'modelo/archivo.class.php';
$archivo = Archivo::recuperarTodos();
 require('vista/archivo/listar.php');
break;
case 17:
$tipoubicacion_id=$_GET["area"];
require_once 'modelo/archivo.class.php';
$archivo = Archivo::recuperarTodosArea($tipoubicacion_id);
 require('vista/archivo/arealistar.php');
break;

default:
        require('vista/error_accion.php'); 
        break;


}


?>
