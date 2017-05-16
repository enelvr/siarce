<?php $title = 'Siarce - Historial Usuario' ?>
<?php ob_start() ?>
<h3><p class="text-center">Historial del Usuario</p></h3>
<div class="span12">
<form  action="sircarch.php" method="POST">
<table class="table table-condensed table-hover table-bordered">
<tr>
<th>Fecha</th>
<th>Codigo</th>
<th>Contenido</th>
<th>Ubicacion</th>
<th>Usuario</th>
<th>Opciones</th>
</tr>
<?php foreach($historial as $item): ?>
<tr>

<td><?php echo $item['fregistro'];?></td>
<td><?php echo $item['n_old'];?></td>
<td><?php echo $item['contenido_old'];?></td>
<td><?php echo $item['ubicacion_old'];?></td>
<td><?php echo $item['usuario_old'];?></td>
<td>
  <input type="hidden" name="buscar" value="<?php echo $item['n_old'];?>"><input type="hidden" name="modulo"  value="6"><input type="hidden" name="accion"  value="5"><input type="submit" class="btn btn-primary"value="Mostrar">
</td>
</tr>
<?php endforeach; ?>
</table>
</form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
