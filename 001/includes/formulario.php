<form method="post" action="#" id="contacto">
	<div>
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre" value="" />
	</div>
	<div>
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" id="apellido" value="" />
	</div>
	<div>
	<label for="como_llego">¿Como llego al sitio?</label>
	<select name="como_llego" id="como_llego">
		<option value="busqueda_natural">Busqueda Natural</option>
		<option value="afiches">Publicidad en Calle</option>
		<option value="recomendado">Recomendado por un amigo</option>
		<option value="otro_sitio">Otro Sitio Web</option>
	</select>
	</div>
	<div>
	<label for="correo">Correo Electronico:</label>
	<input type="text" name="correo" id="correo" value="" />
	</div>
	<div>
	<p>¿Que sistema operativo usa?</p>
	<label><input type="checkbox" name="sistema[]" value="Linux" /> Linux</label>
	<label><input type="checkbox" name="sistema[]" value="Windows" /> Windows</label>
	<label><input type="checkbox" name="sistema[]" value="Mac" /> Mac</label>
	</div>
	<div>
	<label for="status">¿Desea ver una vista previa del mensaje?</label>
	<input type="checkbox" name="status" id="status" value="si" />
	</div>
	<div>
	<label for="mensaje">Escriba su mensaje:</label>
	<textarea name="mensaje" id="mensaje" rows="6" cols="20"></textarea>
	</div>
	<div>
		<input type="reset" value="Reset" />
		<input type="submit" value="Enviar" />
	</div>
	<?php form_contacto(); ?>
</form>