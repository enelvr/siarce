<?php $title = 'Sircarch - Mi Perfil' ?>
<?php ob_start() ?>
<h3><p class="text-center">Mi Perfil</p></h3>
<div class="span12">
<table class="table table-condensed table-hover table-bordered">
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Cedula</th>
<th>Indicador</th>
<th>Telefono</th>
<th>Correo</th>
</tr>

<?php foreach($usuario as $item): ?>
<tr>
<?php $id=$item['id'];?>
<td><?php echo $item['nombre'];?></td>
<td><?php echo $item['apellido'];?></td>
<td><?php echo $item['cedula'];?></td>
<td><?php echo $item['indicador'];?></td>
<td><?php echo $item['telefono'];?></td>
<td><?php echo $item['correo'];?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<th>Area</th>
<th>Cargo</th>
<th>Nivel Estudio</th>
<th>Tipo Usuario</th>
<th>Usuario</th>
<th>Clave</th>
</tr>
<tr>
<td><?php echo $item['area'];?></td>
<td><?php echo $item['cargo'];?></td>
<td><?php echo $item['estudio'];?></td>
<td><?php $t=$item['tipo_usuario_id'];?>
<?php if ($t == 1 ) {echo 'Administrador';}
else {echo 'Operador';}?></td>
<td><?php echo $item['nombre_usuario'];?></td>
<td><?php echo $item['clave'];?></td>
</tr>
<?php endforeach; ?>
</table>
</div>
<p class="text-right"><!--<a class="btn btn-primary" href="sircarch.php?modulo=5&accion=3">Listar</a>||--> 
 <a class="btn btn-primary" href="sircarch.php?modulo=5&accion=6&id=<?php echo $id;?>">Editar</a></p>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
