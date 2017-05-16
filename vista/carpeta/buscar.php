<?php $title = 'Sircarch - Carpeta Creada' ?>
<?php ob_start() ?> 
<div class="span12">
<h3><p class="text-center">Carpeta Creada Con Exito</p></h3>
<form class="well form-search" action="sircarch.php" method="POST">
  <input type="hidden" class="search-query" name="buscar" value="<?php echo $buscar;?>">
	<input type="hidden" name="modulo"  value="7">
        <input type="hidden" name="accion"  value="4">
  <button type="submit" class="btn-primary">Ir a la Nota</button>
</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
