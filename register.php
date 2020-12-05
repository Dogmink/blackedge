<?php
  require 'Modulos/basic.php';
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  $aler = "";
  if (isset($_GET['aler'])) {
    $err = $_GET['aler'];
  }

  if (isset($_SESSION['user_log'])) {
    header('Location: index.php');
  }

 ?>

<div class="contenido-login fadeInUp">
  <div class="row-login">
    <div class="col8">
      <p class="login-header">Register</p>
      <form class="form-login" action="./panel/loginactions.php" method="POST" enctype="multipart/form-data">
        <?php
        if ($err!=null && $err == 0) {
          ?> <p class="error-login"> <?php $alerta = $user->validateErr($aler); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="text" name="username" id="username" value="" placeholder="Nombre de usuario" required>
        <script type="text/javascript">
          $("#username").keyup(function(){
            var ta      =   $("#username");
            letras      =   ta.val().replace(/ /g, "");
            ta.val(letras)
          });
        </script>
        <?php
        if ($err!=null && $err == 1) {
          ?> <p class="error-login"> <?php $alerta = $user->validateErr($aler); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="email" name="email" id="email" value="" placeholder="Correo" required>
        <script type="text/javascript">
          $("#email").keyup(function(){
            var ta      =   $("#email");
            letras      =   ta.val().replace(/ /g, "");
            ta.val(letras)
          });
        </script>
        <?php
        if ($err!=null && $err == 2) {
          ?> <p class="error-login"> <?php $alerta = $user->validateErr($aler); ?> </p> <?php
        }
         ?>
        <input class="input-login" type="password" name="password" value="" placeholder="•••••••••" required>
        <input class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••" required>
        <input class="btn-panel" type="submit" value="Registrarse" name="accion">
        <p class="register-text">¿Ya tienes cuenta? <a class="register-text-link" href="login.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php';
 ?>

</div>
