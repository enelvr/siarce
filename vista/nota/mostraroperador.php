<?php $title = 'SIARCE - Nota Remision' ?>
<?php ob_start() ?> 
<h3><p class="text-center">Nota de Remision</p></h3>
<div class="span12">
<?php foreach($notaremision as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<?php $idnota=$item["id"]; ?>
<?php $buscar=$item["codigo"]; ?>
<td><b>Para:</b><?php echo $item["destinatario"]; ?></td>
<td><b>Area:</b><?php echo $item["aread"]; ?></td>
<td><b>Piso:</b><?php echo $item["pisod"]; ?></td>
</tr>
<tr>
<td><b>Para:</b><?php echo $item["remitente"]; ?></td>
<td><b>Area:</b><?php echo $item["arear"]; ?></td>
<td><b>Piso:</b><?php echo $item["pisor"]; ?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Anotar y Archivar:</b><input type="checkbox" <?php if($item["o0"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Anotar y Devolver:</b><input type="checkbox" <?php if($item["o1"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Su Firma:</b><input type="checkbox" <?php if($item["o2"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Sacar Copias:</b><input type="checkbox" <?php if($item["o3"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Observaciones:</b><input type="checkbox" <?php if($item["o4"] == 1) echo 'checked="checked"'?> disabled></td>
</tr>
<tr>
<td><b>Su Informacion:</b><input type="checkbox" <?php if($item["o5"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Traduccion:</b><input type="checkbox" <?php if($item["o6"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Tramitar:</b><input type="checkbox" <?php if($item["o7"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Su Aprovacion:</b><input type="checkbox" <?php if($item["o8"] == 1) echo 'checked="checked"'?> disabled></td>
<td><b>Revision:</b><input type="checkbox" <?php if($item["o9"] == 1) echo 'checked="checked"'?> disabled></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>

<td><b>Observacion:</b><?php echo $item["observacion"]; ?><?php $arce=$item["tipoubicacion_id"]; ?></td>

</tr>
</table>
<?php endforeach; ?>
<?php require_once 'modelo/carpeta.class.php';
	$carpeta = Carpeta::buscarPorIdN($idnota);
?>
<?php foreach($carpeta as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Carpeta:&nbsp;</b><?php echo $item["carpeta"]; ?></td>
<td><b>Codigo:&nbsp;</b><?php echo $item["codigo"]; ?></td>
<td><b>Contenido:&nbsp;</b><?php echo $item["contenido"]; ?></td>
</tr>

</table>
<?php endforeach; ?>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Recibido Por:</b><br>____________________<br><?php echo $fecha; ?></td>
<td><b>Jefa de Area:</b><br>____________________<br><?php echo $fecha; ?></td>
</tr>
</table>
</div>
<div class="input-prepend">
<div class="span6">
<form name="form" class="logueo" action="sircarch.php" method="POST" id="imprimir">
<span class="add-on"><i class="icon-book"></i></span>
<input type="hidden" name="notaremision_id" value="<?php echo $idnota; ?>">
<input type="hidden" name="buscar" value="<?php echo $buscar; ?>">
<input type="hidden" name="tipoubicacion_id" value="<?php echo $arce; ?>">
<input type="text" name="archivo">
<input type="hidden" name="modulo"  value="8">
        <input type="hidden" name="accion"  value="3">
<input type="submit" value="Asociar Archivo" class="btn btn-primary">
</form>
</div>
<div class="span6">
<form id="form1" name="form1" method="post" action="sircarch.php">
<input type="hidden" name="codigo" value="<?php echo $buscar;?>"/>
<input type="hidden" name="modulo" value="7"/>
<input type="hidden" name="accion"  value="10">
<input type="button"  class="btn btn-primary" name="imprimir" id="imprimir" value="Imprimir" onClick="window.print();" />&nbsp;
<input type="submit" class="btn btn-primary" value="editar"/>
</form>
</div>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
