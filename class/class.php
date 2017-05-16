<?php
session_start();
if ($_POST['action'] == "checkdata") {
	if ($_SESSION['tmptxt'] != $_POST['tmptxt']) {
	echo "<script type='text/javascript'>
			alert('Codigo Incorrecto');
			window.location='sircarch.php?modulo=4&accion=1';
			</script>";	
	}
}
class Conectar 
{
	public static function con()
	{	
		$con=mysql_connect("localhost","root","19415101") or die ('Problemas con la conexion de la base de datos');
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("siarce") or die ('Problemas con la seleccion de la base de datos');
		return $con;
	}
}

class Login
{
	public function logueo()
	{
		$user=$_POST["nombre_usuario"];
		$pass=$_POST["clave"];
		
		$sql="select * from usuario where nombre_usuario='$user' and clave='$pass'";
		$rst=mysql_query($sql,Conectar::con());
		
		$num_reg=mysql_num_rows($rst);
		
		if ($num_reg>0)
		{
			$_SESSION["usuario"]=$user;
			require_once 'modelo/usuario.class.php';
	$ulogin = Usuario::buscarPorPerfil($user);
foreach($ulogin as $ite):
$_SESSION["privilegios"]=$ite['tipo_usuario_id'];
$_SESSION["lndatos"]=$ite['nombre'].'&nbsp;'.$ite['apellido'];
endforeach;
			echo "<script type='text/javascript'>
			alert('Bienvenido al sistema');
			window.location='mpppm.php';
			</script>";
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('Los datos ingresados no existen en la base de datos, por favor contacte al administrador del sistema');
			window.location='sircarch.php?modulo=4&accion=1';
			</script>";
		}
	}
	
	public function autenticar()
	{

		$sql="select * from usuario where nombre_usuario='$_SESSION[usuario]'";
		$rst=mysql_query($sql,Conectar::con());
		
		while ($reg=mysql_fetch_array($rst))
		{
			$this->tipo=$reg;
		}
			return $this->tipo;
	}
	
}
$tipouser=new Login();
					$row=$tipouser->autenticar();
					$rows=$row["tipo_usuario_id"];
?>
