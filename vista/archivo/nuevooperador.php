<?php $title = 'Sircarch - Registro de Archivos' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];?>
<h3><p class="text-center">Registrar Archivo</p></h3>
<div class="input-prepend">
<div class="span4">

<form action="sircarch.php" name="form" method="POST" class="logueo" enctype="multipart/form-data">


<input type="hidden" name="n" value="<?php echo codigo(7);?>" >


<input type="hidden" name="fregistro" value="<?php echo $fecha;?>" >
<input type="hidden" name="hora" value="<?php echo $hora;?>">
<label>Destino:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destino">
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente">
<label>Dependencia:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="dependencia">
<label>Tipologia:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="tipologia_id" name="tipologia_id">
 <?php foreach($tipologia as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
<label>Tradiccion:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="tradiccion_id" name="tradiccion_id">
 <?php foreach($tradiccion as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
</div>
<div class="span4">
<label>Fecha de Informe:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input class="tcal" type="text" name="finforme">
<label>Contenido:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="contenido">

<label>Detalles del Anexo:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="danexo">
<?php $arce=$_GET['arce'];?>
<input type="hidden" name="tipoubicacion_id" value="<?php echo $arce;?>">

<label>Ubicacion Fisica:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="ubicacion">
</div>
<div class="span4">
<label>N. Piezas:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="piezas">
<label>Anexo:</label>
<span class="add-on"><i class="icon-file"></i></span>
<input type="file" name="narchivo">
<label>Observacion:</label>

<textarea name="observacion" rows="3"></textarea>

<br /><br />
<input type="hidden" name="usuario"  value="<?php echo $u; ?>">
<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="2">
<input type="submit" class="btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" />
</div>
</form>

</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
