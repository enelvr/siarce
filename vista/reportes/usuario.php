<?php $title = 'Siarce - Reporte por Usuario' ?>
<?php ob_start() ?>



<div class="span12"><br><br>

<form method="POST" action="sircarch.php" class="well form-search">
<div class="input-prepend">
<label>Buscar Por Usuario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="usuario">
<input type="hidden" name="modulo"  value="6">
<input type="hidden" name="accion"  value="13">
</div>
<input type="submit" value="Buscar" class="btn btn-primary">

</form>


</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
