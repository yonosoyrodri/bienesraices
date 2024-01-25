<?php

// base de datos

require '../../includes/config/database.php';
$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo con msjs de errores

$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';

// ejecutar despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $titulo = $_POST['titulo'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $habitaciones = $_POST['habitaciones'];
  $wc = $_POST['wc'];
  $estacionamiento = $_POST['estacionamiento'];
  $vendedores_id = $_POST['vendedor'];
  $creado = date("Y/m/d H:i:s");

  if (!$titulo) {
    $errores[] = "Debes agregar un titulo";
  }

  if (!$precio) {
    $errores[] = "Debes agregar un precio";
  }

  if (strlen($descripcion) < 50) {
    $errores[] = "Debes agregar una descripción con al menos 50 caracteres";
  }

  if (!$habitaciones) {
    $errores[] = "El número de habitaciones es obligatorio";
  }

  if (!$wc) {
    $errores[] = "El número de baños es obligatorio";
  }

  if (!$estacionamiento) {
    $errores[] = "El número de lugares de estacionamiento es obligatorio";
  }

  if (!$estacionamiento) {
    $errores[] = "Elige un vendedor";
  }


  // REvisar que el arreglo de errores este vacio

  if (empty($errores)) {
    // Insertar en la base de datos
    $query = "INSERT INTO PROPIEDADES (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id' ) ";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      // Redireccionar al usuario

      header('Location /bienesraices/admin');
    }
  }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>

  <a href="/bienesraices/admin/" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) {
    echo '<div class = "alerta error">' . $error . '</div>';
  }
  ?>

  <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php">
    <fieldset>
      <legend>Información General</legend>

      <label for="titulo">Título:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio de la Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" cols="30" rows="4"><?php echo $descripcion; ?></textarea>

    </fieldset>

    <fieldset>
      <legend>Información de la Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="10" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 2" min="1" max="10" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 4" min="1" max="10" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="">--Seleccione un Vendedor--</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
          <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id'] ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
        <?php endwhile; ?>
      </select>


    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>

</main>

<?php
incluirTemplate('footer');
?>