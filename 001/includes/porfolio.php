<?php 
$seccionId = validarGet($_GET['seccion']);
$porfolioId = validarGet($_GET['porfolio']);
$ampliar = validarGet($_GET['ampli']);
?>
<div id="galeria-menu">
<ul>
	<?php menu_galeria($seccionId,$porfolioId); ?>
</ul>
</div>
<div id="porfolio" class="clearfix">
	<?php muestras($seccionId,$porfolioId,$ampliar); ?>
</div>