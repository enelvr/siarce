<?php $title = 'SIARCE - Detalles de Archivos' ?>
<?php ob_start() ?>
<h3><p class="text-center">Reporte General del Archivo</p></h3>
<div class="span12">
<?php foreach($archivo as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr><?php $id=$item["id"];?><?php $codigo=$item["n"];?>
<td><b>Codigo:</b><?php echo $item["n"]; ?></td>
<td><b>Fecha del Informe:</b><?php echo $item["finforme"];?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Destino:</b><?php echo $item["destino"];?></td>
</tr>
<tr>
<td><b>Remitente:</b><?php echo $item["remitente"];?></td>
</tr>
<tr>
<td><b>Contenido:</b><?php echo $item["contenido"];?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Tipologia:</b><?php echo $item["tipologia_id"];?></td>
<td><b>Tradiccion:</b><?php echo $item["tradiccion_id"];?></td>
</tr>
<tr>
<td><b>Anexo:</b><?php echo $item["danexo"];?></td>
<td><b>N. Piezas</b><?php echo $item["piezas"];?></td>
</tr>
</table>

<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Observacion:</b><?php echo $item["observacion"];?></td>
</tr>
</table>

<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Transcripto Por:</b><?php echo $item["usuario"];?></td>
<td><b>Dependencia:</b><?php echo $item["dependencia"];?></td>
</tr>
<tr>
<td><b>Ubicacion:</b><?php echo $item["ubicacion"];?></td>
<td><b>Fecha registro:</b><?php echo $item["fregistro"]; ?></td>
</tr>
</table>

<?php $item["hora"];?>
<?php  $url=$item["url"];?>
<?php endforeach; ?>
<form method="post" action="sircarch.php">
<label>
<input type="hidden" name="codigo" value="<?php echo $codigo;?>"/>
<input type="hidden" name="modulo" value="6"/>
<input type="hidden" name="accion"  value="14">
<a href="upload/<?php echo $url;?>" class="btn btn-primary" target="_blank">Descargar</a>&nbsp;
<input type="submit" class="btn btn-primary" value="editar"/>

<input type="button" class="btn btn-primary" name="imprimir" id="imprimir" value="Imprimir" onClick="window.print();" />
</label>
</form>

</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
