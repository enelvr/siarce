<?php $title = 'Siarce - Editar Usuario' ?>
<?php $active = 'listado' ?> 
<?php ob_start() ?>
 <h3><p class="text-center">Editar usuario</p></h3>
<div class="text-right"><a href="http://localhost/siarce/sircarch.php?modulo=5&accion=3"><span>Listar Usuario<img src="libreria/plus-small.gif" width="12" height="9"/></span></a></div>
<div class="input-prepend"> 
   <div class="span4">    
<form action="sircarch.php" name="form" method="POST" class="logueo">

<label>Nombres:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="nombre" value="<?php echo $usuario->getNombre(); ?>"/>
<label>Apellidos:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="apellido" value="<?php echo $usuario->getApellido(); ?>"/>
<label>Cedula:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="cedula" value="<?php echo $usuario->getCedula(); ?>"/>
<label>Indicador:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="indicador" value="<?php echo $usuario->getIndicador(); ?>"/>
</div><div class="span4">

<label>Telefono:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="telefono" value="<?php echo $usuario->getTelefono(); ?>"/>
<label>Correo:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="correo" value="<?php echo $usuario->getCorreo(); ?>"/>
<label>Área:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="area" value="<?php echo $usuario->getArea(); ?>"/>
<label>Cargo:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="cargo" value="<?php echo $usuario->getCargo(); ?>"/>
<p class="text-center"><br /><br />

<input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" /></p>
		</div>
                <div class="span4">
<label>Nivel Estudio:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="estudio" value="<?php echo $usuario->getEstudio(); ?>" />
<label>Tipo Usuario:</label> 
<span class="add-on"><i class="icon-book"></i></span>

<?php require_once 'modelo/tipousuario.class.php';
$tipousuario = Tipousuario::recuperarTodos();
$t=$usuario->getTipo_usuario_id();
?>
<?php
echo "$t";
echo'
<select id="tipousuario_id" name="tipousuario_id">';?>
 <?php foreach($tipousuario as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>



<label>Usuario:</label> 
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" name="nombre_usuario" value="<?php echo $usuario->getNombre_usuario(); ?>"/> 
<label>Contraseña:</label> 
<span class="add-on"><i class="icon-lock"></i></span>
<input type="password" name="clave" value="<?php echo $usuario->getClave(); ?>"/>

<input type="hidden" name="id"  value="<?php echo $usuario->getId(); ?>">
<input type="hidden" name="modulo"  value="5">
        <input type="hidden" name="accion"  value="7">

 </div>
</form>
                </div>



<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
