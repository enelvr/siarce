<?php $title = 'Siarce - Registro de Usuario' ?>
<?php $active = 'listado' ?> 
<?php ob_start() ?>
 <!--<p class="text-right"><a class="btn btn-primary" href="sircarch.php?modulo=5&accion=3">Listar</a></p>-->
 <h3><p class="text-center">Registrar Usuario</p></h3>
<div class="text-right"><a href="sircarch.php?modulo=5&accion=3"><span>Listar Usuarios<img src="libreria/plus-small.gif" width="12" height="9"/></span></a></div>
<div class="input-prepend"> 
   <div class="span4">     
<form action="sircarch.php" name="formusuario" id="formusuario" method="POST" class="logueo">


<label>Nombres:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="nombre" id="nombre" required />

<label>Apellidos:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="apellido" id="apellidos" required/>

<label>Cedula:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="number" min="7" max="10" name="cedula" id="cedula" required/>

<label>Indicador:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="indicador" id="indicador" required/>
 </div>
		 <div class="span4">
		<label>Telefono:</label>

<span class="add-on"><i class="icon-book"></i></span>
<input type="number" min="11" max="11" name="telefono" id="telefono" required/>
<label>Correo:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="correo" id="correo" required/>
		<label>Área:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="area" id="area" required/>
<label>Cargo:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="cargo" id="cargo" required/><br><br><br>
<center>

<input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="validar_usuario()" name="guardar" /></center>
		</div>
                <div class="span4">
                 
                  
		<label>Nivel Estudio:</label> 
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="estudio" required/>
<label>Tipo Usuario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php echo '<select id="tipo_usuario_id" name="tipo_usuario_id">';?>
<option value="">Seleccione...</option>
<?php
foreach($tipousuario as $item):
echo '
<option value ="'.$item['id'].'">'.$item['descripcion'].'</option>';
endforeach;
echo '
</select>
';

?>
   <label>Login:</label> 
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" name="nombre_usuario" id="nombre_usuario" required/>

<label>Pass:</label> 
<span class="add-on"><i class="icon-lock"></i></span>
<input type="password" name="clave" id="clave" required/>
<input type="hidden" name="modulo"  value="5">
        <input type="hidden" name="accion"  value="2">
<br /><br />


</div></form>
                </div>



<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
