<?php 
require_once('funciones.php');
$seccionId = validarGet($_GET['seccion']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Sebastian Arca - Clientes Web - Parcial 01</title>
	<link rel="stylesheet" type="text/css" media="all" href="css/estilo.css" />
</head>

<body>
<div id="contenedor">
	<div id="encabezado">
		<h1>Entrenamiento Padawan de Programador</h1>
		<h2>"Compartir es bueno"</h2>
		<ul>
			<?php menu($seccionId); ?>
		</ul>
	</div>
	<div class="clearfix">
		<div id="contenido">
			<?php contenido($seccionId); ?>
		</div>
		<div id="lateral">
			<div>
			<p>Redes Sociales</p>
				<ul>
					<?php redes_sociales(); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="pie">
	<p>Diseñado y programado por Sebastian Arca - Todo los acentos fueron omitidos deliveradamente</p>
</div>	
</body>
</html>