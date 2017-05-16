<?php $title = 'Siarce - Editar Archivos' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];?>
<h3><p class="text-center">Editar Archivo</p></h3>

<div class="text-right"><?php $_GET['area']=$area;
if ($_GET['area'] == null) { echo '

<a href="sircarch.php?modulo=6&accion=16"><span>Listar Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_GET['area'])) {echo '

<a href="sircarch.php?modulo=6&accion=17&area='.$_GET[area].'"><span>Listar Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_POST['area'])) {
$_GET['area']=$_POST['area'];
echo '

<a href="sircarch.php?modulo=6&accion=17&area='.$_GET[area].'"><span>Listar Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
?></div>
<br>
<div class="input-prepend">
<div class="span4">

<form action="sircarch.php" name="form" method="POST" class="logueo" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $archivo->getId(); ?>" >
<input type="hidden" name="n" value="<?php echo $archivo->getN(); ?>" >


<input type="hidden" name="fregistro" value="<?php echo $archivo->getFregistro(); ?>" >
<input type="hidden" name="hora" value="<?php echo $archivo->getHora(); ?>">
<label>Destino:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destino" value="<?php echo $archivo->getDestino(); ?>">
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente" value="<?php echo $archivo->getRemitente(); ?>">
<label>Dependencia:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="dependencia" value="<?php echo $archivo->getDependencia(); ?>">
<label>Tipologia:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php require_once 'modelo/tipologia.class.php';
	$tipologia = Tipologia::recuperarTodos();
$t=$archivo->getTipologia_id();
?>
<select id="tipologia_id" name="tipologia_id">
 <?php foreach($tipologia as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>

<?php endforeach; ?>
</select>
<label>Tradiccion:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php require_once 'modelo/tradiccion.class.php';
$tradiccion = Tradiccion::recuperarTodos();
$t=$archivo->getTradiccion_id();
?>
<select id="tradiccion_id" name="tradiccion_id">
 <?php foreach($tradiccion as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>

<?php endforeach; ?>
</select>
</div>
<div class="span4">
<label>Fecha de Informe:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input class="tcal" type="text" name="finforme" value="<?php echo $archivo->getFinforme(); ?>">
<label>Contenido:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="contenido" value="<?php echo $archivo->getContenido(); ?>">

<label>Detalles del Anexo:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="danexo" value="<?php echo $archivo->getDanexo(); ?>">
<label>Tipo Ubicacion:</label>
<span class="add-on"><i class="icon-book"></i></span>

<?php require_once 'modelo/tipoubicacion.class.php';
$tipoubicacion = Tipoubicacion::recuperarTodos();
$t=$archivo->getTipoubicacion_id();
?>
<?php
if ($_SESSION["privilegios"]!=1)
{echo '<select id="tipoubicacion_id" name="tipoubicacion_id" disabled>';}
else{echo'
<select id="tipoubicacion_id" name="tipoubicacion_id">';}?>
 <?php foreach($tipoubicacion as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>
<label>Ubicacion Fisica:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="ubicacion" value="<?php echo $archivo->getUbicacion(); ?>">

<br><br><p class="text-center"><input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" /><p>
</div>
<div class="span4">
<label>N. Piezas:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="number" min="1" max="3" name="piezas" value="<?php echo $archivo->getPiezas(); ?>">
<input type="hidden" name="url" value="<?php echo $archivo->getUrl(); ?>">
<label>Observacion:</label>

<textarea name="observacion" rows="3" class="estilotextarea3"><?php echo $archivo->getObservacion(); ?></textarea>

<br /><br />
<input type="hidden" name="usuario"  value="<?php echo $u; ?>">
<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="11">
<?php if($_GET['area']){echo '<input type="hidden" name="tipoubicacion_id"  value="'.$_GET[area].'"><input type="hidden" name="area"  value="'.$_GET[area].'">';}?>
</div>
</form>

</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
