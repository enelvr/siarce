<?php
require_once("class/class.php");
if (isset($_POST["test"]) and $_POST["test"]=="si")
{
$login=new Login();
$login->logueo();
exit();
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="public/css/bootstrap.css" rel="stylesheet">
   <link href="public/css/sircarch.css" rel="stylesheet" media="screen">
<style media="print" type="text/css">
#imprimir {
visibility:hidden
}
</style>
        <script type="text/javascript" src="public/js/bootstrap.js"></script>
	<script type="text/javascript" src="public/js/validar.js"></script>
  </head>
  <body><div class="cintillo">
<img src="public/img/cintillo.png">
</div><div class="banner">
<img src="public/img/banner.jpg">
        
        </div>
      

        <div class="container">
<div class="optionBG">
           <?php include("public/menu.php");?>
</div>
            <div class="row special-proy">
 <?php echo $content ?>
            </div>
              
        

        <footer>
            <span>Diseñado por  MPPPM.<a href="" target="_blank"></a>Todos los derechos reservados 2015</span>
        </footer>
</div>
    </body>
</html>
