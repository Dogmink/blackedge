<?php
  require 'Modulos/basic.php';
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  $err = "";
  if (isset($_GET['err'])) {
    $err = $_GET['err'];
  }

  if (isset($_SESSION['user_log'])) {
    header('Location: index.php');
  }

 ?>

<div class="contenido-login fadeInUp">
  <div class="row-login">
    <div class="col8">
      <p class="login-header">Register</p>
      <form class="form-login" id="form-register" >
        <?php
        if ($err!=null && $err == 0) {
          ?> <p class="error-login"> <?php $error = $user->validateErr($err); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="text" name="username" id="nombre" value="" placeholder="Nombre de usuario" autocomplete="off" required>
        <?php
        if ($err!=null && $err == 1) {
          ?> <p class="error-login"> <?php $error = $user->validateErr($err); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="email" id="correo" name="email" value="" placeholder="Correo" autocomplete="off" required>
        <?php
        if ($err!=null && $err == 2) {
          ?> <p class="error-login"> <?php $error = $user->validateErr($err); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="password" name="password" value="" placeholder="•••••••••" autocomplete="off" required>
        <input class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••" autocomplete="off" required>
        <input class="btn-panel" type="submit" value="Registrarse" name="accion">
        <p class="register-text">¿Ya tienes cuenta? <a class="register-text-link" href="login.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php';
 ?>

</div>
