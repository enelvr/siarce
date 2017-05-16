<?php $title = 'SIARCE - Nota Remision' ?>
<?php ob_start() ?> 
<?php if($_GET['arc']==1){
  echo "<script type>
	alert('ARCHIVO NO PUDO SER AGREGADO..');
	
	</script>";
 }
?>
<h3><p class="text-center">Nota de Remision</p></h3>
<div class="text-right"><?php 
$_GET['area']=$area;
if ($_GET['area'] == null) { echo '

<a href="sircarch.php?modulo=7&accion=12"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_GET['area'])) {echo '

<a href="sircarch.php?modulo=7&accion=13&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_POST['area'])) {
$_GET['area']=$_POST['area'];
echo '

<a href="sircarch.php?modulo=7&accion=13&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
?>
</div>
<br>
<div class="span12">
<?php foreach($notaremision as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<?php $idnota=$item["id"]; ?>
<?php $buscar=$item["codigo"]; ?>
<td><b>Para:</b><?php echo $item["destinatario"]; ?></td>
<td><b>Area:</b>
<?php
$b=$item["aread"];
require_once 'modelo/area.class.php';
$area = Area::buscarPorId($b);
echo $area->getDescripcion();
?>

</td>
<td><b>Piso:</b><?php
$b=$item["pisod"];
require_once 'modelo/piso.class.php';
$piso = Piso::buscarPorId($b);
echo $piso->getDescripcion();
?></td>
</tr>
<tr>
<td><b>Para:</b><?php echo $item["remitente"]; ?></td>
<td><b>Area:</b><?php
$b=$item["arear"];
require_once 'modelo/area.class.php';
$area = Area::buscarPorId($b);
echo $area->getDescripcion();
?></td>
<td><b>Piso:</b><?php
$b=$item["pisor"];
require_once 'modelo/piso.class.php';
$piso = Piso::buscarPorId($b);
echo $piso->getDescripcion();
?></td>
</tr>
</table>

<table class="table table-condensed table-hover table-bordered">
<tr>

<td><b>Observacion:</b><?php echo $item["observacion"]; ?></td>

</tr>
</table>
<?php endforeach; ?>
<?php require_once 'modelo/notarob.class.php';

	$notarob = Notarob::buscarPorIdN($idnota);
?>
&nbsp;&nbsp;<b>Para:</b>
<table class="table table-condensed table-hover table-bordered">
<tr>

<td>
<?php foreach($notarob as $item): ?>

<?php 
$i=$item["ob_id"];
require_once 'modelo/ob.class.php';
$ob = Ob::buscarPorId($i);?>
<?php echo $ob->getDescripcion();?>,&nbsp;
<?php endforeach; ?>
</td>

</tr>
</table>
<?php require_once 'modelo/carpeta.class.php';
	$carpeta = Carpeta::buscarPorIdN($idnota);
?>
<?php foreach($carpeta as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Carpeta:&nbsp;</b><?php echo $item["carpeta"]; ?></td>
<td><b>Codigo:&nbsp;</b><?php echo $item["codigo"]; ?></td>
<td><b>Contenido:&nbsp;</b><?php echo $item["contenido"]; ?></td>
</tr>

</table>
<?php endforeach; ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Recibido Por:</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Jefa de Area:</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fecha; ?></td>
</tr>
</table>
</div>
<div class="input-prepend">
<div class="span6">
<form name="form" class="logueo" action="sircarch.php" method="POST" id="imprimir">

<input type="hidden" name="notaremision_id" value="<?php echo $idnota; ?>">
<input type="hidden" name="buscar" value="<?php echo $buscar; ?>">
<span class="add-on"><i class="icon-book"></i></span>
<input type="number" min="7" max="7" name="archivo" required>
<input type="hidden" name="modulo"  value="8">
        <input type="hidden" name="accion"  value="1">
<input type="submit" value="Asociar Archivo" class="btn btn-primary">
</form>
</div>
<div class="span6">
<form id="form1" name="form1" method="post" action="sircarch.php">
<input type="hidden" name="codigo" value="<?php echo $buscar;?>"/>
<input type="hidden" name="modulo" value="7"/>
<input type="hidden" name="accion"  value="8">
<input type="button"  class="btn btn-primary" name="imprimir" id="imprimir" value="Imprimir" onClick="window.print();" />&nbsp;

<?php if(isset($_GET['area'])) {echo '
<a id="imprimir" class="btn btn-primary" href="sircarch.php?modulo=7&accion=8&codigo='.$buscar.'&area='.$_GET[area].'">Editar</a>';

}
else {'<a id="imprimir" class="btn btn-primary" href="sircarch.php?modulo=7&accion=8&codigo='.$buscar.'">Editar</a>';}?>
</form>

</div>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
