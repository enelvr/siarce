<?php $title = 'SIARCE - Busqueda Nota Remision' ?>
<?php ob_start() ?>
<h3><p class="text-center">Buscar Nota Remision</p></h3>
<div class="span12">
<?php $arce=$_GET['arce'];?>
<form class="well form-search" action="sircarch.php" method="POST">
  <input type="text" class="search-query" name="buscar">
<input type="hidden" class="search-query" name="tipoubicacion_id" value="<?php echo $arce;?>">
	<input type="hidden" name="modulo"  value="7">
        <input type="hidden" name="accion"  value="6">
  <button type="submit" class="btn-primary">Buscar</button>
</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
