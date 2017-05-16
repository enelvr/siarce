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
	require_once 'modelo/tipousuario.class.php';
	$tipousuario= Tipousuario::recuperarTodos();
        require('vista/usuario/nuevo.php'); 
        break;
 case 2:
	 require_once 'modelo/usuario.class.php';
	$usuario= new Usuario ($_POST["nombre"], $_POST["apellido"], $_POST["cedula"], $_POST["indicador"], $_POST["telefono"], $_POST["correo"], $_POST["area"], $_POST["cargo"], $_POST["estudio"], $_POST["tipo_usuario_id"], $_POST["nombre_usuario"], $_POST["clave"]);
	$usuario->guardar();
	 $usuario = Usuario::BuscarPorTodos();
        require('vista/usuario/listado.php'); 
        break;
 case 3:
	require_once 'modelo/usuario.class.php';
	 $usuario = Usuario::BuscarPorTodos();
	require('vista/usuario/listar.php');
	 break;
 case 4:
	require_once 'modelo/usuario.class.php';
	
	$usuario = Usuario::buscarPorId($_GET['id']);
	require('vista/usuario/mostrar.php');
	break;
 case 5:
	require_once 'modelo/usuario.class.php';
	 $usuario = Usuario::buscarPorI($_GET['id']);        
         $usuario->eliminar();
	  $usuario = Usuario::BuscarPorTodos();
	 require('vista/usuario/listado.php');
	
	break;
 case 6:
 require_once 'modelo/usuario.class.php';
include_once "class/clear.php";
if (isset($_GET['codigo'])){
$_POST['id']=$_GET['codigo'];
}$usuario = Usuario::buscarPorI(clear($_POST['id']));
if($usuario){
 require('vista/usuario/editar.php');
}
else
{
require('vista/error_accion.php'); 
}
 break;	
 case 7:
 require_once 'modelo/usuario.class.php';
 $usuario = new Usuario ($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['indicador'], $_POST['telefono'], $_POST['correo'], $_POST['area'], $_POST['cargo'], $_POST['estudio'], $_POST['tipo_usuario_id'], $_POST['nombre_usuario'], $_POST['clave'], $_POST['id']);
$usuario->actualiza();
$usuario = Usuario::BuscarPorTodos();
require('vista/usuario/listar.php');
echo "<script type>
	alert('DATOS ACTUALIZADO CORRECTAMENTE...');
	</script>";
 break;
 case 8:
require('vista/reportes/usuario.php');
 break;
case 9:
require('vista/usuario/buscar.php');
 break;
case 10:
	require_once 'modelo/usuario.class.php';
include_once "class/clear.php";
if (isset($_GET['codigo'])){

$_POST['buscar']=$_GET['codigo'];
}$usuario = Usuario::buscarPorC(clear($_POST['buscar']));
	if($usuario){
	require('vista/usuario/mostrar.php');
	}
else{
$usuario = Usuario::buscarPorN(clear($_POST['buscar']));
	if($usuario){
	require('vista/usuario/mostrar.php');
}}
if($usuario==null){
 
$usuario = Usuario::BuscarPorTodos();
require('vista/usuario/listar.php');
echo "<script type>
	alert('EL USUARIO SOLICITADO NO EXISTE EL REGISTRO...');
	</script>";
}
 break;
	case 11:
	require_once 'modelo/usuario.class.php';
	$usuario = Usuario::buscarPorPerfil($_GET['user']);
	if($usuario){
	require('vista/usuario/ver.php');
	}
	else{
   echo "<script type>
	alert('EL USUARIO SOLICITADO NO EXISTE EL REGISTRO...');
	location='class/salir.php';
	</script>";
	
	}
	break;
	case 12:
	 require_once 'modelo/usuario.class.php';
	$usuario = Usuario::buscarPorId($_GET['id']);
 require('vista/usuario/perfil.php');
	break;
	case 13:
	 require_once 'modelo/usuario.class.php';
	$usuario = Usuario::buscarPorId($_GET['id']);
 require('vista/usuario/editaroperador.php');
	break;
case 14:
 require_once 'modelo/usuario.class.php';
 $usuario = new Usuario ($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['indicador'], $_POST['telefono'], $_POST['correo'], $_POST['area'], $_POST['cargo'], $_POST['estudio'], $_POST['tipo_usuario_id'], $_POST['nombre_usuario'], $_POST['clave'], $_POST['id']);
$usuario->actualiza();
 $usuario = Usuario::buscarPorId($_POST['id']);
 require('vista/usuario/ver.php');
 break;
 default:
        require('vista/error_accion.php'); 
        break;


}


?>
