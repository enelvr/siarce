<?php $title = 'Sircarch - Busqueda Nota Remision' ?>
<?php ob_start() ?>
<h3><p class="text-center">Buscar Nota Remision</p></h3>
<div class="span12">
<form class="well form-search" action="sircarch.php" method="POST">
  <input type="text" class="search-query" name="buscar">
	<input type="hidden" name="modulo"  value="7">
        <input type="hidden" name="accion"  value="4">
  <button type="submit" class="btn-primary">Buscar</button>
</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
