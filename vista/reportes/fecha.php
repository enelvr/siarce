<?php $title = 'Siarce - Reporte por Fecha' ?>
<?php ob_start() ?>



<div class="span12"><br><br>
<form action="sircarch.php" name="form" method="POST" class="well form-search">

<div class="input-prepend">

<label>Fecha Inicial:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input class="tcal" type="text" name="f1">

<label>&nbsp;&nbsp;Fecha Final:</label>
<span class="add-on"><i class="icon-book"></i></span>
<input class="tcal" type="text" name="f2">
<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="12">
</div>
<input type="submit" class="btn btn-primary" value="Buscar" title="Buscar" onclick="document.form.submit();" name="guardar" />
</div>
</form>


<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
