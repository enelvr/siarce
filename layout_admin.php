<?php
require_once("class/class.php");
if(isset($_SESSION["usuario"]))

{
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="public/css/bootstrap.css" rel="stylesheet">
 <link href="public/css/menu.css" rel="stylesheet">
   <link href="public/css/sircarch.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="public/css/base.css" />
        <script type="text/javascript" src="public/js/bootstrap.js"></script>
 <script type="text/javascript" src="public/js/tcal.js"></script>
 <script type="text/javascript" src="public/js/validar.js"></script>
 <style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>
  </head>
  <body>
<div class="cintillo">
<img src="public/img/cintillo.png">
</div>
<div class="banner">
<img src="public/img/banner.jpg">
        
        </div>
      
<?php include("public/validar.php"); ?>

        <div class="container">
<div class="span12">

<div class="span3">
<?php echo $title;?>
</div>

<div class="span3">
<b>Usuario:</b>&nbsp;<?php echo $_SESSION["lndatos"];?>
</div>

<div class="span5"> 
<b>Fecha:</b>&nbsp;
<?php echo date("d-m-Y");?>&nbsp;
<span id="liveclock"></span>
<?php include("public/hora.php"); ?>
<a href="class/salir.php" id="imprimir">Cerrar Session</a>
</div>

</div>
            <div class="row special-proy">

 <?php echo  $content ?>
            </div>
              
        

        <footer>
            <span>Diseñado por MPPPM. <a href="" target="_blank"></a>Todos los derechos reservados 2014</span>
        </footer>
</div>
    </body>
</html>
<?php
}else{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para tener acceso');
	window.location='index.php';
	</script>
	";
}
?>

