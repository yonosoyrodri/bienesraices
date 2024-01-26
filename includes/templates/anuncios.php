<?php
require 'includes/config/database.php';
$db = conectarDB();

$query = "SELECT * FROM propiedades limit $limite";

$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
  <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
    <div class="anuncio">

      <img loading="lazy" src="/bienesraices/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" />

      <div class="contenido-anuncio">
        <h3><?php echo $propiedad['titulo']; ?></h3>
        <p><?php echo $propiedad['descripcion']; ?></p>
        <p class="precio">$<?php echo $propiedad['precio']; ?></p>
        <ul class="iconos-caracteristicas">
          <li>
            <img src="build/img/icono_wc.svg" alt="icono WC" loading="lazy" />
            <p><?php echo $propiedad['wc']; ?></p>
          </li>
          <li>
            <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" />
            <p><?php echo $propiedad['estacionamiento']; ?></p>
          </li>
          <li>
            <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio" loading="lazy" />
            <p><?php echo $propiedad['habitaciones']; ?></p>
          </li>
        </ul>

        <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block"> Ver Propiedad </a>
      </div>
    </div>
  <?php endwhile;  ?>
</div>

<?php
mysqli_close($db);
?>