<?php

require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

// Autenticar usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (!$email) {
    $errores[] = "El email es obligatorio o no es válido";
  }

  if (!$password) {
    $errores[] = "El password es obligatorio o no es válido";
  }

  if (!empty($errores)) {
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($db, $query);

    if ($resultado->num_rows) {
      $usuario = mysqli_fetch_assoc($resultado);
      $auth = password_verify($password, $usuario["password"]);

      if ($auth) {
        session_start();
        $_SESSION["usuario"] = $usuario["email"];
        $_SESSION['login'] = true;

        header('Location: /bienesraices/admin');
      } else {
        $errores[] = "El password es incorrecto";
      }
    } else {
      $errores[] = "El Usuario no existe";
    }
  }
}


require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Iniciar Sesión</h1>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>


  <?php endforeach; ?>

  <form class="formulario">
    <fieldset>
      <legend>Email y Password</legend>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Tu Email" value="" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Tu Password" value="" required>
    </fieldset>

    <input type="submit" value="Iniciar sesión" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplate('footer');
?>