<?php $title = 'Siarce - Listado Usuarios' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];?>
<?php include "public/encabezado.php";?>
	<body>
<div class="span12">
 <div class="float-right"><a href="sircarch.php?modulo=5&accion=1"><span>Nuevo Usuario<img src="libreria/plus-small.gif" width="12" height="9"/></span></a></div>
<form method="POST" action="sircarch.php" class="well form-search">
<input type="text" name="buscar">
<input type="hidden" name="modulo"  value="5">
<input type="hidden" name="accion"  value="10">
<input type="submit" value="Buscar" class="btn btn-primary">
</form>
 <div class="module">
                	<h2><span>Archivos</span></h2>
                    
                    <div class="module-table-body">
                    
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:10%">Cedula</th>
                                    <th style="width:20%">Nombre</th>
                                    <th style="width:16%">Apellido</th>
                                    <th style="width:15%">Telefono</th>
                                    <th style="width:19%">Correo</th>
                                    <th style="width:10%">Area</th>
                                    <th style="width:10%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
<?php foreach($usuario as $item): ?>
                                <tr>
                                    <td class="align-center"><?php echo $item["cedula"];?></td>
                                    <td><?php echo $item["nombre"];?></td>
                                    <td><?php echo $item["apellido"];?></td>
                                    <td><?php echo $item["telefono"];?></td>
                                    <td><?php echo $item["correo"];?></td>
                                    <td><?php echo $item["area"];?></td>
                                    <td>
                                        <a href="sircarch.php?modulo=5&accion=10&codigo=<?php echo $item[cedula];?>"><img src="public/img/mostrar.png" width="16" height="16" title="Mostrar" /></a>
                                        <a href="sircarch.php?modulo=5&accion=6&codigo=<?php echo $item[id];?>"><img src="libreria/pencil.gif" width="16" height="16" title="Editar" /></a>
<a href="sircarch.php?modulo=9&accion=1&codigo=<?php echo $item['nombre_usuario'];?>"><img src="libreria/planilla.png" width="16" height="16" title="Historial" /></a>
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
               <!-- End .module -->
               </div>
                </body>
</html>

<?php $content = ob_get_clean() ?>
<?php require('layout_admin.php'); ?>
