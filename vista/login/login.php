<?php $title = 'Siarce - Ingresar' ?>  
<?php ob_start() ?>           
                <div class="span5">
   <br><p>Para entrar al Sistema Web, necesitas tener un Usuario y una Contraseña. Si aún no la tienes comunicarse con el administrador.</p>
    <br>  
<br>         
 <p class="text-center"><img src="public/img/personas.png" width="200px"></p>
          
                </div>
		<div class="span1">
		</div>
                <div class="span6">
             <div class="input-prepend">       
<form action="sircarch.php?modulo=4&accion=1" name="form" method="post" class="logueo">

<h3>Iniciar Session</h3>
<br />
<label>Usuario:</label> 
<span class="add-on"><i class="icon-user"></i></span>
<input placeholder="Debes Colocar un Usuario" type="text" id="usuario" name="nombre_usuario" required />
<br /><br />
<label>Contraseña:</label> 
<span class="add-on"><i class="icon-lock"></i></span>
<input placeholder="Debes Colocar una Clave" type="password" id="clave" name="clave" required />
<label>Codigo:</label> 
<img src="class/captcha.php" width="100" height="30" vspace="3"><br>
<span class="add-on"><i class="icon-lock"></i></span>
 <input placeholder="Debes Colocar el Codigo" name="tmptxt" id="codigo" type="text" size="30" required >
<input type="hidden" name="test" value="si"/>
 <input name="action" type="hidden" value="checkdata">
<br /><br />
<input type="submit" class="btn btn-primary" value="Entrar" title="Entrar" name="btget" onclick="validar_formulario()"/>
</form>
	</div>
		      
                 
                </div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php'); ?>
