<?php $title = 'Siarce - Historial' ?>
<?php ob_start() ?>
<?php require_once("class/class.php");?>
<?php $u=$_SESSION["usuario"];?>
<?php include "public/encabezado.php";?>
	<body>
<div class="span12">
 <div class="float-right"><a href="sircarch.php?modulo=5&accion=3"><span>Lista de Usuarios<img src="libreria/plus-small.gif" width="12" height="9"/></span></a></div>
 <div class="module">
                	<h2><span>Historial del Usuario <?php echo $_GET['codigo'];?></span></h2>
                    
                    <div class="module-table-body">
                    
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:10%">Fecha</th>
                                    <th style="width:10%">Codigo</th>
                                    <th style="width:21%">Contenido</th>
                                    <th style="width:20%">Ubicacion</th>
                                    <th style="width:19%">Usuario</th>
                                    <th style="width:10%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
<?php foreach($historial as $item): ?>
                                <tr>
                                    <td class="align-center"><?php echo $item["factual"];?></td>
                                    <td><?php echo $item["n_old"];?></td>
                                    <td><?php echo $item["contenido_old"];?></td>
                                    <td><?php echo $item["ubicacion_old"];?></td>
                                    <td><?php echo $item["usuario_old"];?></td>
                                    <td>
                                        <a href="sircarch.php?modulo=6&accion=5&codigo=<?php echo $item[n_old];?>&cdigo=<?php echo $item[usuario_old];?>"><img src="public/img/mostrar.png" width="16" height="16" title="Mostrar" /></a>
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
