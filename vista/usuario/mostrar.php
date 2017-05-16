<?php $title = 'Siarce - Detalles de Usuario' ?>
<?php ob_start() ?>
<h3><p class="text-center">Detalles del Usuario</p></h3>
<div class="text-right"><a href="sircarch.php?modulo=5&accion=3"><span>Listar Usuarios<img src="libreria/plus-small.gif" width="12" height="9"/></span></a></div>
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
<?php $userio=$item['nombre_usuario'];?>
<td><?php echo $item['nombre_usuario'];?></td>
<td><?php echo $item['clave'];?></td>
</tr>
<?php endforeach; ?>
</table>

<div class="text-center"><!--<a class="btn btn-primary" href="sircarch.php?modulo=5&accion=3">Listar</a>||-->
<form action="sircarch.php" name="form" method="POST" class="logueo"> 

<a class="btn btn-primary" href="sircarch.php?modulo=9&accion=1&codigo=<?php echo $userio;?>">
Historial</a> || 
<a class="btn btn-primary" href="sircarch.php?modulo=5&accion=6&codigo=<?php echo $id;?>">Editar</a> || <a class="btn btn-primary" href="sircarch.php?modulo=5&accion=5&id=<?php echo $id;?>">Borrar</a>
</form>
</div>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
