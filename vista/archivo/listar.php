<?php $title = 'Siarce - Listado de Archivos' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];
?>
<?php include "public/encabezado.php";?>
	<body>
<div class="span12">
 <div class="float-right"><?php if ($_GET['area'] == null) { echo '

<a href="sircarch.php?modulo=6&accion=1"><span>Nuevo Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_GET['area'])) {echo '

<a href="sircarch.php?modulo=6&accion=1&area='.$_GET[area].'"><span>Nuevo Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
elseif(isset($_POST['area'])) {
$_GET['area']=$_POST['area'];
echo '

<a href="sircarch.php?modulo=6&accion=17&area='.$_GET[area].'"><span>Listar Archivo<img src="libreria/plus-small.gif" width="12" height="9"/></span></a>';
}
?></div>
<form method="POST" action="sircarch.php" class="well form-search">
<input type="text" name="buscar">
<?php if ($_SESSION["privilegios"]==1)
{echo'
<input type="hidden" name="modulo"  value="6">
<input type="hidden" name="accion"  value="5">
';}
elseif($_SESSION["privilegios"]==2)
{echo'
<input type="hidden" class="search-query" name="arce" value="1">
	<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="7">
';}
else
{echo'<input type="hidden" class="search-query" name="arce" value="2">
	<input type="hidden" name="modulo"  value="6">
        <input type="hidden" name="accion"  value="7">';}
?>
<input type="submit" value="Buscar" class="btn btn-primary">
</form>
 <div class="module">
                	<h2><span>Archivos</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:31%">Contenido</th>
                                    <th style="width:10%">Transcriptor</th>
                                    <th style="width:21%">Tipologia</th>
                                    <th style="width:8%">N. Piezas</th>
                                    <th style="width:10%">Fecha</th>
                                    <th style="width:15%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
<?php foreach($archivo as $item): ?>
                                <tr>
                                    <td class="align-center"><?php echo $item["n"];?></td>
                                    <td><?php echo $item["contenido"];?></td>
                                    <td><?php echo $item["usuario"];?></td>
                                    <td><?php $b=$item["tipologia_id"];
require_once 'modelo/tipologia.class.php';
$tipologia = Tipologia::buscarPorId($b);
echo $tipologia->getDescripcion();
?></td>
                                    <td><?php echo $item["piezas"];?></td>
                                    <td><?php echo $item["fregistro"]; ?></td>
                                    <td>
                                        <a href="sircarch.php?modulo=6&accion=4&codigo=<?php echo $item[n];?>"><img src="public/img/mostrar.png" width="16" height="16" title="Mostrar" /></a>
                                        <a href="sircarch.php?modulo=6&accion=10&codigo=<?php echo $item[n];?>"><img src="libreria/pencil.gif" width="16" height="16" title="Editar" /></a>
                                        <a href="upload/<?php echo $item[url]; ?>" target="_blank"><img src="public/img/des.png" width="16" height="16" title="Descargar" /></a>
                                    </td>
                                </tr> <?php endforeach?>
                                 </tbody>               </table>
                   
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="libreria/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="libreria/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center" size="5px"/>
                                <img class="next" src="libreria/arrow.gif" alt="next"/>
                                <img class="last" src="libreria/arrow-stop.gif" alt="last"/> 
                               <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                       
                          
                        </div>
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
               
                </body>
</html>

<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
