<?php $title = 'Siarce - Registro de Archivos' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];?>
<h3><p class="text-center">Registrar Archivo</p></h3>
 <div class="text-right"><?php if ($_GET['area'] == null) { echo '

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

<form action="sircarch.php" name="formarchivo" method="POST" class="logueo" enctype="multipart/form-data">


<input type="hidden" name="n" value="<?php echo codigo(7);?>" >


<input type="hidden" name="fregistro" value="<?php echo $fecha;?>" >
<input type="hidden" name="hora" value="<?php echo $hora;?>">
<label>Destino:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destino" id="destino" required>
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente" id="remitente"required>
<label>Dependencia:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="dependencia" id="dependencia"required>
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
<input class="tcal" type="text" name="finforme" id="finforme"required>
<label>Contenido:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="contenido" id="contenido"required>

<label>Detalles del Anexo:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="danexo" id="danexo"required>

<label>Tipo Ubicacion:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php
if ($_SESSION["privilegios"]!=1)
{echo '<select id="tipoubicacion_id" name="tipoubicacion_id" disabled>


';
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

<label>Ubicacion Fisica:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="ubicacion" id="ubicacion"required><br><br>
<center>
<input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="validar_formularios()" name="guardar" />
</center>
</div>
<div class="span4">
<label>N. Piezas:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="number" min="1" max="3" name="piezas" id="piezas"required>
<label>Anexo:</label>
<input id="uploadFile" placeholder="Subir Archivo" type="text" disabled="disabled" />
<div class="fileUpload btn btn-primary">
    <span>+</span>
    <input type="file" class="upload" name="narchivo" id="narchivo"required/>
</div>
<label>Observacion:</label>

<textarea name="observacion" rows="3" required class="estilotextarea2"></textarea>

<br /><br />
<?php if($_GET['area']){echo '<input type="hidden" name="tipoubicacion_id"  value="'.$_GET[area].'"><input type="hidden" name="area"  value="'.$_GET[area].'">';}?>
<input type="hidden" name="usuario"  value="<?php echo $u; ?>">
<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="2">

<script type="text/javascript">
document.getElementById("narchivo").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
</div>
</form>

</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
