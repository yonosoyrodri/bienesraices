<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
	<h1>Casa en Venta Frente al Bosque</h1>

	<picture>
		<source srcset="build/img/destacada.webp" type="image/webp" />
		<source srcset="build/img/destacada.jpg" type="image/jpeg" />
		<img loading="lazy" src="build/img/destacada.jpg" alt="destacada" />
	</picture>

	<div class="resumen-propiedad">
		<p class="precio">$3,000,000</p>
		<ul class="iconos-caracteristicas">
			<li>
				<img src="build/img/icono_wc.svg" alt="icono WC" loading="lazy" />
				<p>3</p>
			</li>
			<li>
				<img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" />
				<p>3</p>
			</li>
			<li>
				<img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy" />
				<p>3</p>
			</li>
		</ul>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestiae aliquam nesciunt unde in totam et officiis dolore similique quibusdam, neque laudantium distinctio vel suscipit animi odio id, magni temporibus? Tempora quae sint numquam quasi, error nam placeat cupiditate labore
		</p>
		<p>omnis tempore delectus unde voluptate pariatur quia ipsum? Eligendi eius obcaecati facere tempore mollitia corrupti necessitatibus consequuntur sequi veniam dicta.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam tempore explicabo delectus. Laborum esse, distinctio fuga iure, similique obcaecati velit quae ipsa optio nihil nulla nostrum aliquid, provident fugiat soluta. Odit commodi, recusandae laboriosam cum veritatis assumenda et</p>
		<p>tenetur, quidem vel aliquid earum eveniet quibusdam saepe debitis soluta nostrum, nulla id dolor quis ipsum quo? Omnis, obcaecati. Officia, cum! Officia?</p>
	</div>
</main>

<?php
incluirTemplate('footer');
?>