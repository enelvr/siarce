<?php $title = 'Siarce - Busqueda de Usuario' ?>
<?php ob_start() ?>
<h3><p class="text-center">Buscar Usuario</p></h3>
<div class="span12">
<form class="well form-search" action="sircarch.php" method="POST">
  <input type="text" class="search-query" name="buscar">
	<input type="hidden" name="modulo"  value="5">
        <input type="hidden" name="accion"  value="10">
  <button type="submit" class="btn-primary">Buscar</button>
</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
