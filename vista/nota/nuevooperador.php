<?php $title = 'Sircarch - Nota de Remision' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<h3><p class="text-center">
Cargar Nota de Remision</p></h3>
<div class="input-prepend">


<form action="sircarch.php" name="form" method="POST" class="logueo">

<div class="span4">
<label>Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destinatario">
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente">
<div class="checkbox">
<label>
 <input type="checkbox" name="o0" value="1">Anotar y Archivar<br>
<input type="checkbox" name="o1" value="1">Anotar y Devolver<br>
<input type="checkbox" name="o2" value="1">Su firma<br>
<input type="checkbox" name="o3" value="1">Sacar Copias<br>
<input type="checkbox" name="o4" value="1">Observaciones<br>
</label>
</div>
</div>
<div class="span4">
<label>Area Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="aread" name="aread">
 <?php foreach($area as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
<label>Area Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="arear" name="arear">
 <?php foreach($area as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
 <div class="checkbox">
    <label>
        <input type="checkbox" name="o5" value="1">Su Informacion<br>
	<input type="checkbox" name="o6" value="1">Traduccion<br>
	<input type="checkbox" name="o7" value="1">Tramitar<br>
	<input type="checkbox" name="o8" value="1">Su Aprovacion<br>
	<input type="checkbox" name="o9" value="1">Revision<br>
    </label>
 </div>
</div>
<div class="span4">
<label>Piso Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="pisod" name="pisod">
 <?php foreach($piso as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
<label>Piso Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="pisor" name="pisor">
 <?php foreach($piso as $item): ?>
<option value ="<?php echo $item['id']?>"><?php echo $item['descripcion']?></option>
<?php endforeach; ?>
</select>
<?php $arce=$_GET['arce'];?>
<input type="hidden" name="tipoubicacion_id" value="<?php echo $arce;?>">

<label>Observacion:</label>
<textarea name="observacion" rows="3"></textarea>

<input type="hidden" name="modulo"  value="7">
<input type="hidden" name="codigo" value="<?php echo codigo(8);?>" >
<input type="hidden" name="fregistro" value="<?php echo $fecha;?>" >
        <input type="hidden" name="accion"  value="2">
<input type="submit" class="btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" />
</div>
</form>
</div>
 
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
