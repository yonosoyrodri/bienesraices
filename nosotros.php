<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
	<h1>Conoce Sobre Nosotros</h1>

	<div class="contenido-nosotros">
		<div class="imagen">
			<picture>
				<source srcset="build/img/nosotros.webp" type="image/webp" />
				<source srcset="build/img/nosotros.jpg" type="image/jpeg" />
				<img src="build/img/nosotros.jpg" alt="sobre nosotros" />
			</picture>
		</div>
		<div class="texto-nosotros">
			<blockquote>25 Años de Experiencia</blockquote>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestiae aliquam nesciunt unde in totam et officiis dolore similique quibusdam, neque laudantium distinctio vel suscipit animi odio id, magni temporibus? Tempora quae sint numquam quasi, error nam placeat cupiditate labore
			</p>
			<p>omnis tempore delectus unde voluptate pariatur quia ipsum? Eligendi eius obcaecati facere tempore mollitia corrupti necessitatibus consequuntur sequi veniam dicta.</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam tempore explicabo delectus. Laborum esse, distinctio fuga iure, similique obcaecati velit quae ipsa optio nihil nulla nostrum aliquid, provident fugiat soluta. Odit commodi, recusandae laboriosam cum veritatis assumenda et
			</p>
			<p>tenetur, quidem vel aliquid earum eveniet quibusdam saepe debitis soluta nostrum, nulla id dolor quis ipsum quo? Omnis, obcaecati. Officia, cum! Officia?</p>
		</div>
	</div>
</main>

<section class="contenedor seccion">
	<h1>Más Sobre Nosotros</h1>

	<div class="iconos-nosotros">
		<div class="icono">
			<img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy" />
			<h3>Seguridad</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora culpa velit quis doloremque placeat laboriosam mollitia autem reprehenderit optio itaque consectetur distinctio, odio neque delectus dignissimos sunt quod. Perspiciatis.</p>
		</div>
		<div class="icono">
			<img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
			<h3>Precio</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora culpa velit quis doloremque placeat laboriosam mollitia autem reprehenderit optio itaque consectetur distinctio, odio neque delectus dignissimos sunt quod. Perspiciatis.</p>
		</div>
		<div class="icono">
			<img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
			<h3>Tiempo</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora culpa velit quis doloremque placeat laboriosam mollitia autem reprehenderit optio itaque consectetur distinctio, odio neque delectus dignissimos sunt quod. Perspiciatis.</p>
		</div>
	</div>
</section>

<?php
incluirTemplate('footer');
?>