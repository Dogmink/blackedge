<?php
  require 'Modulos/basic.php';
  include 'resources/user.php';
  ?>
  <script src="js/functions.js" charset="utf-8"></script>
  <?php
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
      <form class="form-login" id="formRegister">
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
        <p class="error-login" id="logErrorText"></p>
        <input class="input-login" type="password" name="password" value="" placeholder="•••••••••" autocomplete="off" required>
        <input class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••" autocomplete="off" required>
        <button class="btn-panel" type="submit" name="register">Registrarse</button>
        <p class="register-text">¿Ya tienes cuenta? <a class="register-text-link" href="login.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php';
 ?>

</div>
