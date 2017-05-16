<?php $title = 'Siarce - Organigrama' ?>  
<?php $active = 'organigrama' ?> 
<?php ob_start() ?>           
 
                <div class="span6">
                     <br>
                    <img src="public/img/organidrmfinal.jpg" width="330px" class="img-polaroid">
		    </span> 
                </div>
                <div class="span6">
                
                    <br>
               <img src="public/img/organigenefinal.jpg" width="325px" class="img-polaroid">
                </div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php'); ?>
