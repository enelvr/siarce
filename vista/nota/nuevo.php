<?php $title = 'Siarce - Nota de Remision' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<h3><p class="text-center">
Cargar Nota de Remision</p></h3>
<div class="text-right"><?php if ($_GET['area'] == null) { echo '

<a href="sircarch.php?modulo=7&accion=12"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_GET['area'])) {echo '

<a href="sircarch.php?modulo=7&accion=12&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_POST['area'])) {
$_GET['area']=$_POST['area'];
echo '

<a href="sircarch.php?modulo=7&accion=12&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
?></div>
<br>
<div class="input-prepend">


<form action="sircarch.php" name="form" method="POST" class="logueo">

<div class="span4">
<label>Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destinatario"required>
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente"required>
<label>Ubicacion:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php
if ($_SESSION["privilegios"]!=1)
{echo '<select id="tipoubicacion_id" name="tipoubicacion_id" disabled>';
foreach($tipoubicacion as $item):
if($_SESSION["privilegios"]==$item['id']){
echo'
<option value ="'.$item['id'].'">'.$item['descripcion'].'</option>';
}
endforeach;
echo '
</select>
';}

else{
echo '<select id="tipoubicacion_id" name="tipoubicacion_id">';
foreach($tipoubicacion as $item):
echo '
<option value ="'.$item['id'].'">'.$item['descripcion'].'</option>';
endforeach;
echo '
</select>
';
}
?>
<label>Observacion:</label>
<textarea name="observacion" rows="3"required class="estilotextarea"></textarea>

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
<br><br><p class="text-center"><input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="validar_nota()" name="guardar" /></p>
 
</div>
<div class="span4"><br>
<div class="checkbox">
<label>
 <input type="checkbox" name="o0" value="1">Anotar y Archivar<br>
<input type="checkbox" name="o1" value="2">Anotar y Devolver<br>
<input type="checkbox" name="o2" value="3">Su firma<br>
<input type="checkbox" name="o3" value="4">Sacar Copias<br>
<input type="checkbox" name="o4" value="5">Observaciones<br>

        <input type="checkbox" name="o5" value="6">Su Informacion<br>
	<input type="checkbox" name="o6" value="7">Traduccion<br>
	<input type="checkbox" name="o7" value="8">Tramitar<br>
	<input type="checkbox" name="o8" value="9">Su Aprovacion<br>
	<input type="checkbox" name="o9" value="10">Revision<br>
    </label>
 </div>


<input type="hidden" name="modulo"  value="7">
<?php if($_GET['area']){echo '<input type="hidden" name="tipoubicacion_id"  value="'.$_GET[area].'"><input type="hidden" name="area"  value="'.$_GET[area].'">';}?>
<input type="hidden" name="codigo" value="<?php echo codigo(8);?>" >
<input type="hidden" name="fregistro" value="<?php echo $fecha;?>" >
        <input type="hidden" name="accion"  value="2">

</div>
</form>
</div>
 
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
