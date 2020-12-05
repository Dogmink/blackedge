<?php
  require 'Modulos/basic.php';
  $user = new BlackEdgeStore\User;
  $logErr = "";
  if (isset($_GET['logErr'])) {
    $logErr = $_GET['logErr'];
  }

  if (isset($_SESSION['user_log'])) {
    header('Location: index.php');
  }
 ?>

<div class="contenido-login fadeInUp">
  <div class="row-login">
    <div class="col8">
      <p class="login-header">Login</p>
      <form class="form-login" action="./panel/loginactions.php" method="post">
        <?php
        if ($logErr!=null) {
          ?> <p class="error-login"> <?php $user->errorLogin($logErr); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="text" name="username" value="" placeholder="Ingresa tu nombre de usuario"  required>
        <input class="input-login" type="password" name="password" value="" placeholder="Ingresa tu •••••••••" required>
        <input class="btn-panel" type="submit" value="Ingresar" name="accion">
        <p class="register-text">¿No tienes cuenta? <a class="register-text-link" href="register.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php'
 ?>

</div>
