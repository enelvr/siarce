<?php $title = 'Sircarch - Listado de Usuario' ?>
<?php $active = 'listado' ?> 
<?php ob_start() ?>
 <p class="text-right"><a class="btn btn-primary" href="sircarch.php?modulo=5&accion=1">Nuevo</a></p>
 <h3><p class="text-center">Listar Usuario</p></h3>
<div class="span12">
<table class="table table-condensed table-hover table-bordered">
<thead>
<tr>
<th>Nombre:</th>
<th>Apellido:</th>
<th>Cedula:</th>
<th>Telefono:</th>
<th>Opciones:</th>
</tr>
</thead>
<tbody>

<?php foreach($usuario as $item): ?>
<tr class="error">
<td><?php echo $item['nombre'];?></td>
<td><?php echo $item['apellido'];?></td>
<td><?php echo $item['cedula'];?></td>
<td><?php echo $item['telefono'];?></td>
<td><a href="sircarch.php?modulo=5&accion=4&id=<?php echo $item['id'];?>"><i class="icon-search"></i>Mostrar</a></td>
</tr>
 <?php endforeach; ?>

</tbody>
</table>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
