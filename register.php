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
      <form id="formulario" class="form-login">
      
        <input class="input-login" type="text" name="username" id="nombre" value="" placeholder="Nombre de usuario" autocomplete="off" required>
      
        <div id="failEmail" style="display: none">
          <p class="error-login">Ingresa un <b>correo electronico</b> valido.</p>
        </div>
        <input class="input-login" type="email" id="correo" name="email" value="" placeholder="Correo" autocomplete="off" required>
        <div id="failPass" style="display: none">
          <p class="error-login">Las <b>contraseñas</b> no coinciden</p>
        </div>
        <input class="input-login" type="password" name="password" value="" placeholder="•••••••••" autocomplete="off" required>
        <input class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••" autocomplete="off" required>
        <input type="hidden" name="accion" value="registro">
        <input id="pushData" class="btn-panel" type="submit">
        <p class="register-text">¿Ya tienes cuenta? <a class="register-text-link" href="login.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php';
 ?>

</div>
