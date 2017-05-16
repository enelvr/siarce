<?php $title = 'Siarce - Pagina no Encontrada' ?>
<?php ob_start() ?>
<div class="span12">
<div class="alert alert-error"> 
  <strong><h1>Error, 404!</h1></strong>Pagina no encontrada  
</div> 

</div>
<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?><script type='text/javascript'>
	alert('AREA RESTRINGIDA..');
	location='class/salir.php';
	</script>
