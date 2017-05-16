<?php $title = 'Siarce - Editar Remision' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<h3><p class="text-center">
Editar Nota de Remision</p></h3>
<div class="input-prepend">


<form action="sircarch.php" name="form" method="POST" class="logueo">

<div class="span4">
<label>Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destinatario" value="<?php echo $notaremision->getDestinatario(); ?>">
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente" value="<?php echo $notaremision->getRemitente(); ?>">
<div class="checkbox">
<label>
 <input type="checkbox" name="o0" value="1"<?php if($notaremision->getO0() == 1) echo 'checked="checked"'?>>Anotar y Archivar<br>
<input type="checkbox" name="o1" value="1"<?php if($notaremision->getO1() == 1) echo 'checked="checked"'?>>Anotar y Devolver<br>
<input type="checkbox" name="o2" value="1" <?php if($notaremision->getO2() == 1) echo 'checked="checked"'?>>Su firma<br>
<input type="checkbox" name="o3" value="1" <?php if($notaremision->getO3() == 1) echo 'checked="checked"'?>>Sacar Copias<br>
<input type="checkbox" name="o4" value="1" <?php if($notaremision->getO4() == 1) echo 'checked="checked"'?>>Observaciones<br>
</label>
</div>
</div>
<div class="span4">
<label>Area Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php require_once 'modelo/area.class.php';
$area = Area::recuperarTodos();
$t=$notaremision->getAread();
?>
<select id="aread" name="aread">
 <?php foreach($area as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>
<label>Area Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php require_once 'modelo/area.class.php';
$area = Area::recuperarTodos();
$t=$notaremision->getArear();
?>
<select id="arear" name="arear">
 <?php foreach($area as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>
 <div class="checkbox">
    <label>
        <input type="checkbox" name="o5" value="1" <?php if($notaremision->getO5() == 1) echo 'checked="checked"'?>>Su Informacion<br>
	<input type="checkbox" name="o6" value="1" <?php if($notaremision->getO6() == 1) echo 'checked="checked"'?>>Traduccion<br>
	<input type="checkbox" name="o7" value="1" <?php if($notaremision->getO7() == 1) echo 'checked="checked"'?>>Tramitar<br>
	<input type="checkbox" name="o8" value="1" <?php if($notaremision->getO8() == 1) echo 'checked="checked"'?>>Su Aprovacion<br>
	<input type="checkbox" name="o9" value="1" <?php if($notaremision->getO9() == 1) echo 'checked="checked"'?>>Revision<br>
    </label>
 </div>
</div>
<div class="span4">
<label>Piso Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="pisod" name="pisod">
 <?php 
require_once 'modelo/piso.class.php';
$piso = Piso::recuperarTodos();
$t=$notaremision->getPisod();
?>
 <?php foreach($piso as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>
<label>Piso Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<select id="pisor" name="pisor">
<?php 
require_once 'modelo/piso.class.php';
$piso = Piso::recuperarTodos();
$t=$notaremision->getPisor();
?>
 <?php foreach($piso as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>

<input type="hidden" name="tipoubicacion_id"  value="<?php echo $notaremision->getTipoubicacion_id(); ?>">
<label>Observacion:</label>
<textarea name="observacion" rows="3"><?php echo $notaremision->getObservacion(); ?></textarea>

<input type="hidden" name="modulo"  value="7">
<input type="hidden" name="codigo" value="<?php echo $notaremision->getCodigo(); ?>" >
<input type="hidden" name="id" value="<?php echo $notaremision->getId(); ?>" >
<input type="hidden" name="fregistro" value="<?php echo $notaremision->getFregistro(); ?>" >
        <input type="hidden" name="accion"  value="11">
<input type="submit" class="btn btn-primary" value="Editar" title="Guardar" onclick="document.form.submit();" name="guardar" />
</div>
</form>
</div>
 
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
