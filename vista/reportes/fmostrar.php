<?php $title = 'Siarce - Reportes de Archivos' ?>
<?php ob_start() ?>
<h3><p class="text-center">Reportes de Archivos</p></h3>
<div class="span12">
<?php foreach($archivo as $item): ?>
<table class="table table-condensed table-hover table-bordered">
<tr><?php $id=$item["id"];?><?php $codigo=$item["n"];?>
<td><b>Codigo:</b>&nbsp;<?php echo $item["n"]; ?></td>
<td><b>Fecha del Informe:</b>&nbsp;<?php echo $item["finforme"];?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Destino:</b>&nbsp;<?php echo $item["destino"];?></td>
</tr>
<tr>
<td><b>Remitente:</b>&nbsp;<?php echo $item["remitente"];?></td>
</tr>
<tr>
<td><b>Contenido:</b>&nbsp;<?php echo $item["contenido"];?></td>
</tr>
</table>
<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Tipologia:</b>&nbsp;<?php
$b=$item["tipologia_id"];
require_once 'modelo/tipologia.class.php';
$tipologia = Tipologia::buscarPorId($b);
echo $tipologia->getDescripcion();
?></td>
<td><b>Tradiccion:</b>&nbsp;
<?php
$b=$item["tradiccion_id"];
require_once 'modelo/tradiccion.class.php';
$tradiccion = Tradiccion::buscarPorId($b);
echo $tradiccion->getDescripcion();
?></td>
</tr>
<tr>
<td><b>Anexo:</b>&nbsp;<?php echo $item["danexo"];?></td>
<td><b>N. Piezas:</b>&nbsp;<?php echo $item["piezas"];?></td>
</tr>
</table>

<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Observacion:</b>&nbsp;<?php echo $item["observacion"];?></td>
</tr>
</table>

<table class="table table-condensed table-hover table-bordered">
<tr>
<td><b>Transcripto Por:</b>&nbsp;<?php echo $item["usuario"];?></td>
<td><b>Dependencia:</b>&nbsp;<?php echo $item["dependencia"];?></td>
</tr>
<tr>
<td><b>Ubicacion:</b>&nbsp;<?php echo $item["ubicacion"];?></td>
<td><b>Fecha registro:</b>&nbsp;<?php echo $item["fregistro"]; ?></td>
</tr>
</table>

<?php $item["hora"];?><br>
<?php  $url=$item["url"];?><br>
<a id="imprimir" href="upload/<?php echo $url;?>" class="btn btn-primary" target="_blank">Anexo</a>
<hr/>
<?php endforeach; ?>
<div class="text-center">
<form method="post" action="sircarch.php">
<input type="button" class="btn btn-primary" name="imprimir" id="imprimir" value="Imprimir" onClick="window.print();" />
</form>
</div>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
