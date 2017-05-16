<?php $title = 'Sircarch - Vision' ?>  
<?php $active = 'vision' ?>
<?php ob_start() ?>           
 
                <div class="span6">
                    
                    <img src="public/img/vision.jpg" width="200px">
		    </span> 
                </div>
                <div class="span6">
                
                     <h1>Nuestra Visión</h1>
                    <br>
                    <span class="text-center"> 
		Ser el órgano de la Administración Pública Central líder rector de las áreas de hidrocarburos en general, petroquímica, carboquímica, similares y conexas, en razón a su competencia institucional y acción adecuada y oportuna fundamentada sólidamente en la excelencia y motivación al logro de sus trabajadores. 
                </div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php'); ?>
