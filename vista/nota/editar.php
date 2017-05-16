<?php $title = 'Siarce - Editar Remision' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<h3><p class="text-center">
Editar Nota de Remision</p></h3>
<div class="text-right"><?php $_GET['area']=$area;
if ($_GET['area'] == null) { echo '

<a href="sircarch.php?modulo=7&accion=12"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_GET['area'])) {echo '

<a href="sircarch.php?modulo=7&accion=13&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_POST['area'])) {
$_GET['area']=$_POST['area'];
echo '

<a href="sircarch.php?modulo=7&accion=13&area='.$_GET[area].'"><span>Listar Nota<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
?></div>
<br>
<div class="input-prepend">


<form action="sircarch.php" name="form" method="POST" class="logueo">

<div class="span4">
<label>Destinatario:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="destinatario" value="<?php echo $notaremision->getDestinatario(); ?>">
<label>Remitente:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input type="text" name="remitente" value="<?php echo $notaremision->getRemitente(); ?>">
<label>Ubicacion:</label>
<span class="add-on"><i class="icon-book"></i></span>
<?php require_once 'modelo/tipoubicacion.class.php';
$tipoubicacion = Tipoubicacion::recuperarTodos();
$t=$notaremision->getTipoubicacion_id();
?>
<?php
if ($_SESSION["privilegios"]!=1)
{echo '<select id="tipoubicacion_id" name="tipoubicacion_id" disabled>';}
else{echo'
<select id="tipoubicacion_id" name="tipoubicacion_id">';}?>
 <?php foreach($tipoubicacion as $item): ?>
<?php if($t==$item['id'])
{echo'<option  selected value="'.$item['id'].'">'.$item['descripcion'].'</option>';}
else{echo '<option   value="'.$item['id'].'">'.$item['descripcion'].'</option>';}?>
<?php endforeach; ?>
</select>
<label>Observacion:</label>
<textarea name="observacion" rows="3" class="estilotextarea"><?php echo $notaremision->getObservacion(); ?></textarea>
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
</select><br><br>
<p class="text-center"><input type="submit" class="btn btn-primary" value="Guardar" title="Guardar" onclick="document.form.submit();" name="guardar" /></p>
</div>
<div class="span4">
<?php require_once 'modelo/notarob.class.php';
$idnota=$notaremision->getId();
	$notarob = Notarob::buscarPorIdN($idnota);
?>
<div class="checkbox">
<label><br>
<?php foreach($notarob as $item): ?>

<?php 
$i=$item["ob_id"];
require_once 'modelo/ob.class.php';
$ob = Ob::buscarPorId($i);?>
<?php if($i==1){$a1=1; echo '<input type="checkbox" name="o0" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}


 if($i==2){$a2=2;echo '<input type="checkbox" name="o1" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}

 if($i==3){$a3=3;echo '<input type="checkbox" name="o2" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>"; }

 if($i==4){$a4=4;echo '<input type="checkbox" name="o3" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>"; }

 if($i==5){$a5=5;echo '<input type="checkbox" name="o4" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>"; }

 if($i==6){$a6=6;echo '<input type="checkbox" name="o5" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}

 if($i==7){$a7=7;echo '<input type="checkbox" name="o6" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}

 if($i==8){$a8=8;echo '<input type="checkbox" name="o7" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>"; }

 if($i==9){$a9=9;echo '<input type="checkbox" name="o8" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}

 if($i==10){$a10;echo '<input type="checkbox" name="o9" value="'.$i.'" checked="checked" >';  echo $ob->getDescripcion(); echo"<br>";}
/*else{echo'<input type="checkbox" name="o0" value="1">Anotar y Archivar';}*/
?>

<?php endforeach; ?>
<?php if($a1!=1){ echo '<input type="checkbox" name="o0" value="1">'; echo"Anotar y Archivar<br>";}?>
<?php if($a2!=2){ echo '<input type="checkbox" name="o1" value="2">'; echo"Anotar y Devolver<br>";}?>
<?php if($a3!=3){ echo '<input type="checkbox" name="o2" value="3">'; echo"Su firma<br>";}?>
<?php if($a4!=4){ echo '<input type="checkbox" name="o3" value="4">'; echo"Sacar Copias<br>";}?>
<?php if($a5!=5){ echo '<input type="checkbox" name="o4" value="5">'; echo"Observaciones<br>";}?>
<?php if($a6!=6){ echo '<input type="checkbox" name="o5" value="6">'; echo"Su Informacion<br>";}?>
<?php if($a7!=7){ echo '<input type="checkbox" name="o6" value="7">'; echo"Traduccion<br>";}?>
<?php if($a8!=8){ echo '<input type="checkbox" name="o7" value="8">'; echo"Tramitar<br>";}?>
<?php if($a9!=9){ echo '<input type="checkbox" name="o8" value="9">'; echo"Su Aprocacion<br>";}?>
<?php if($a10!=10){ echo '<input type="checkbox" name="o9" value="10">'; echo"Revision<br>";}?>
</label>
</div>



<input type="hidden" name="modulo"  value="7">
<input type="hidden" name="codigo" value="<?php echo $notaremision->getCodigo(); ?>" >
<input type="hidden" name="id" value="<?php echo $notaremision->getId(); ?>" >
<input type="hidden" name="fregistro" value="<?php echo $notaremision->getFregistro(); ?>" >
        <input type="hidden" name="accion"  value="9">
<?php if($_GET['area']){echo '<input type="hidden" name="tipoubicacion_id"  value="'.$_GET[area].'"><input type="hidden" name="area"  value="'.$_GET[area].'">';}?>
</div>
</form>
</div>
 
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
