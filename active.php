<?php
include 'resources/user.php';
$user = new BlackEdgeStore\User;

$hash = '';
$username = '';

?>

<!DOCTYPE html>
      <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>BlackEdge Store | Activación de cuenta</title>
        <link rel="stylesheet" href="/css/grid.css">
        <link rel="stylesheet" href="/css/estilos.css">
      </head>
      <body>

<?php

if (isset($_GET['username']) && isset($_GET['hash'])) {
    $hash = $_GET['hash'];
    $username = $_GET['username'];
    $validate = $user->validateActiveAccount($username, $hash);
    if ($validate) {
      ?>
        <div class="contenido">
          <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Todo listo, <b style="color: var(--hovercolor1);"><?php print $username ?></b></h1>
          <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en un momento.</h3>
          <?php
              session_start();
            if (isset($_SESSION['user_log']) && $_SESSION['user_log'] != null) {
              $usr = $_SESSION['user_log'];
              $result = $user->checkUser($usr['username']);
              $_SESSION['user_log'] = $result;
            }
          ?>
          <script type="text/javascript">
          setTimeout(function () {
            window.location.href = "index.php";
          }, 6000);
          </script>
        </div>
      <?php
    }else{
      ?>
        <div class="contenido">
          <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Oops, el enlace de activación ya <b style="color: var(--hovercolor1);">no es valido</b></h1>
          <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en un momento.</h3>
          <script type="text/javascript">
          setTimeout(function () {
            window.location.href = "index.php";
          }, 6000);
          </script>
        </div>
      <?php
    }
  } else {
    ?>
      <div class="contenido">
        <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Oops, algo salió <b style="color: var(--hovercolor1);">mal</b></h1>
        <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en un momento.</h3>
        <script type="text/javascript">
        setTimeout(function () {
          window.location.href = "index.php";
        }, 6000);
        </script>
      </div>
    <?php
  }
 ?>

</body>
      </html>
