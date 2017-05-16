<?php $title = 'Sircarch - Mision' ?>  
<?php $active = 'mision' ?>  
<?php ob_start() ?> 
<div class="span12">          
 <div class="hs"><h4>Misión</h4></div>
               
                    <span class="span"> 
		Regular, formular, administrar, evaluar y controlar las políticas del Ejecutivo Nacional, en las áreas de hidrocarburos en general, petroquímica, carboquímica, similares y conexas, para promover su explotación racional, armónica e integral y garantizar su necesaria contribución al desarrollo económico, social y endógeno sostenible y sustentable de la República Bolivariana de Venezuela.
		    </span> 

                <div class="hs"><h4>Visión</h4></div>
                    
                    <span class="span"> 
		Ser el órgano de la Administración Pública Central líder rector de las áreas de hidrocarburos en general, petroquímica, carboquímica, similares y conexas, en razón a su competencia institucional y acción adecuada y oportuna fundamentada sólidamente en la excelencia y motivación al logro de sus trabajadores. 
                </div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php'); ?>
