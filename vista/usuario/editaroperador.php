<?php $title = 'Siarce - Editar Usuario' ?>
<?php $active = 'listado' ?> 
<?php ob_start() ?>
 <h3><p class="text-center">Actualizando contraseña</p></h3>
<div class="input-prepend"> 
   <div class="span4">    
<form action="sircarch.php" name="form" method="POST" class="logueo">
<?php foreach($usuario as $item): ?>

<input type="hidden" name="nombre" value="<?php echo $item['nombre'];?>"/>
<input type="hidden" name="apellido" value="<?php echo $item['apellido'];?>"/>
<input type="hidden" name="cedula" value="<?php echo $item['cedula'];?>"/>
<input type="hidden" name="indicador" value="<?php echo $item['indicador'];?>"/>
</div><div class="span4">
<label>Pass:</label> 
<span class="add-on"><i class="icon-lock"></i></span>
<input type="password" name="clave" value="<?php echo $item['clave'];?>"/>

<input type="hidden" name="telefono" value="<?php echo $item['telefono'];?>"/>
<input type="hidden" name="correo" value="<?php echo $item['correo'];?>"/>
<input type="hidden" name="area" value="<?php echo $item['area'];?>"/>
<input type="hidden" name="cargo" value="<?php echo $item['cargo'];?>"/>
		</div>
                <div class="span4">
<input type="hidden" name="estudio" value="<?php echo $item['estudio'];?>" />
<input type="hidden" name="nombre_usuario" value="<?php echo $item['nombre_usuario'];?>"/> 
<input type="hidden" name="tipo_usuario_id" value="<?php echo $item['tipo_usuario_id'];?>"/> 

<input type="hidden" name="id"  value="<?php echo $item['id'];?>">
<input type="hidden" name="modulo"  value="5">
        <input type="hidden" name="accion"  value="14">
<br /><br />

<input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" />
<?php endforeach; ?>
 </div>
</form>
                </div>



<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
