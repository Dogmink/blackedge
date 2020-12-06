<?php
  require 'Modulos/basic.php';
  include 'resources/user.php';
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
         <script type="text/javascript">
            $("#nombre").keyup(function(){
              var ta      =   $("#nombre");
              letras      =   ta.val().replace(/ /g, "");
              ta.val(letras)
            });
         </script>
         <?php
          if (isset($_GET['hash'])&& $_GET['hash'] != null && isset($_GET['email'])&& $_GET['email'] != null) {
            ?>
            <input type="hidden" name="hash" value="<?php print $_GET['hash'] ?>">
            <input type="hidden" name="email" value="<?php print $_GET['email'] ?>">
            <?php
          }
          ?>
        <input class="input-login" type="text" name="username" id="nombre" value="" placeholder="Ingresa tu nombre de usuario" autocomplete="off"  required>
        <input class="input-login" type="password" name="password" value="" placeholder="Ingresa tu •••••••••" autocomplete="off" required>
        <input class="btn-panel" type="submit" value="Ingresar" name="accion">
        <p class="register-text">¿No tienes cuenta? <a class="register-text-link" href="register.php">Haz clic aquí</a></p>
      </form>
    </div>
  </div>

<?php
  require 'Modulos/footer.php'
 ?>

</div>
