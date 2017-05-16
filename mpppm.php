<?php
require_once("class/class.php");
if(isset($_SESSION["usuario"]))
{
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sircar - Sistema Informático de Registro y Control de Archivos</title>
    <meta name="description" content="">
    <meta name="author" content="">
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
   <link href="public/css/sircarch.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="public/js/bootstrap.js"></script>
 
 <script type="text/javascript" src="public/js/validar.js"></script>
  </head>
  <body>
<div class="cintillo">
<img src="public/img/cintillo.png">
</div>
<div class="banner">
<img src="public/img/banner.jpg">
        
        </div>
      

        <div class="container">
<div class="optionBG">
           <?php

require_once("class/class.php");
					$tipouser=new Login();
					$row=$tipouser->autenticar();

if($row["tipo_usuario_id"]!="0")
						{
							include("public/menu_admin.php");
						}
?>
</div>
<div class="span12">

<div class="span3">

<?php echo "SIARCE - Principal";?>
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

</div> <div class="row special-proy">
<div class="text-center"><h3>Bienvenido al Sistema</h3></div>
 
 <div class="span6"><br>
                   &nbsp; <img src="public/img/descarga (4).gif"  width="350px">
                </div>
                <div class="text-left">
                    <h4>Archivo Central</h4>
                    <br>
                    <span>
Es un área administrativa que agrupa documentos transferidos por los distintos archivos de gestión de la dirección regional, una vez finalizado su trámite, que siguen siendo vigentes y objeto de consulta por las propias oficinas y los particulares en general.
                    </span>
                    <br>
                    <br>
                    <span>
Teniendo como objetivo regular todo el acervo documental producido y recibido en la institución, en el cumplimiento de sus funciones. Velar por la protección y conservación del patrimonio documental, asesorar en la organización y administración de los archivos de gestión de cada oficina. 
                    </span>
                </div>
            </div>
         <!--  

 <div class="row special-proy">
 <div class="text-center"><h1>Bienvenido al Sistema</h1></div>
 <div> 


<div class="span6">
                    <img src="" width="300px" class="img-polaroid">
                </div>
                <div class="span6">
                    <h4> Archivo Central</h4>
                    <br>
                    <span>
                      Es un área administrativa que agrupa documentos transferidos por los distintos archivos de gestión de la dirección regional, una vez finalizado su trámite, que siguen siendo vigentes y objeto de consulta por las propias oficinas y los particulares en general.
                    </span>
                </div>
            </div>
                  
                  
               
            </div>
              
        -->

        <footer>
            <span>Diseñado por MPPPM.<a href="" target="_blank"></a> Todos los derechos reservados 2015</span>
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
