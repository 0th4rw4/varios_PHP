<?php
$contenido="<div>Mensaje de: $n $a<br />
Remitente: $correo<br />
Llegue a tu sitio por $cmllg<br />
Usa los siguiente sistemas: $sistema<br /> 
El mensaje enviado es:<br />
$m</div>";

$encabezados = 'Content-type: text/html; charset=utf-8' . "\r\n";
$encabezados .= "From: $correo\r\n";
$encabezados .= "To: sebastianarca@gmail.com\r\n";

if(isset($status) && $status!=null){
	echo "<div class=\"vistaPrevia\">$contenido</div>";
}else {
		 mail( 'sebastianarca@gmail.com', 'Mensaje desde la web' , $contenido, $encabezados );
		 if (!mail) {
		 	echo "<div class=\"vistaPrevia\"><p>El mensaje se envio correctamente</p><p>Muchas Gracias</p></div>";
		}else {echo "<div class=\"vistaPrevia\"><p>Hubo un error!!!</p></div>";} 
	}
?>