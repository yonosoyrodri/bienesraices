<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
	<h1>Contacto</h1>

	<picture>
		<source srcset="build/img/destacada3.webp" type="image/webp" />
		<source srcset="build/img/destacada3.jpg" type="image/jpeg" />
		<img loading="lazy" src="build/img/destacada3.jpg" alt="imagen de contacto" />
	</picture>

	<h2>Llene el Formulario de Contacto</h2>

	<form class="formulario">
		<fieldset>
			<legend>Información personal</legend>

			<label for="nombre">Nombre</label>
			<input type="text" placeholder="Tu nombre..." id="nombre" />

			<label for="email">E-mail</label>
			<input type="email" placeholder="Tu E-mail..." id="email" />

			<label for="telefono">Teléfono</label>
			<input type="tel" placeholder="Tu Teléfono..." id="telefono" />

			<label for="mensaje">Mensaje:</label>
			<textarea id="mensaje" cols="30" rows="4"></textarea>
		</fieldset>

		<fieldset>
			<legend>Información sobre la propiedad</legend>

			<label for="opciones">Vende o Compra</label>
			<select name="" id="opciones">
				<option value="" disabled selected>--Seleccione--</option>
				<option value="Compra">Compra</option>
				<option value="Vende">Vende</option>
			</select>

			<label for="presupuesto">Precio o Presupuesto</label>
			<input type="number" placeholder="Tu Precio o Presupuesto..." id="presupuesto" />
		</fieldset>

		<fieldset>
			<legend>Contacto</legend>
			<p>¿Cómo desea ser contactado?</p>

			<div class="forma-contacto">
				<label for="contactar-telefono">Teléfono</label>
				<input name="contacto" type="radio" value="telefono" id="contactar-telefono>" />
				<label for="contactar-email">E-mail</label>
				<input name="contacto" type="radio" value="email" id="contactar-email>" />
			</div>

			<p>Si eligió teléfono, elija la fecha y hora para ser contactado...</p>

			<label for="fecha">Teléfono</label>
			<input type="date" id="fecha" />

			<label for="hora">hora</label>
			<input type="time" id="hora" min="09:00" max="19:00" />
		</fieldset>

		<input type="submit" value="Enviar" class="boton-verde" />
	</form>
</main>

<?php
incluirTemplate('footer');
?>