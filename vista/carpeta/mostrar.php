<?php $title = 'Siarce - Archivo Cargado' ?>
<?php ob_start() ?> 
<div class="span12">
<h3><p class="text-center">Archivo  Cargado</p></h3>
<?php foreach($archivo as $item): ?>
<?php $contenido=$item["contenido"]; ?>
<?php $n=$item["n"]; ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Codigo Archivo:&nbsp;</b><?php echo $item["n"]; ?></td>
<td><b>Contenido:&nbsp;</b><?php echo $item["contenido"]; ?></td>
</tr>
</table>
<?php endforeach; ?>
<form name="form" class="logueo" action="sircarch.php" method="POST">
<div class="input-prepend">
<div class="span6">
<label>Nombre Carpeta:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="carpeta" required>
</div>
<div class="span3">
<br>
<input type="hidden" name="buscar"  value="<?php echo $buscar; ?>">
<input type="hidden" name="notaremision_id"  value="<?php echo $n_id; ?>">
<input type="hidden" name="n"  value="<?php echo $n; ?>">
<input type="hidden" name="contenido"  value="<?php echo $contenido; ?>">
<input type="hidden" name="modulo"  value="8">
        <input type="hidden" name="accion"  value="2">
<input type="submit" value="Asociar" class="btn btn-primary">

</div>
<div class="span3">
<br>
<input type="submit" value="Regresar a Nota" class="btn btn-primary">
</div>
</div>

</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
