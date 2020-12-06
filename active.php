<?php
include 'resources/user.php'
$user = new BlackEdgeStore\User;

$hash = '';
$email = '';

if (isset($_GET['$hash']) && $_GET['hash']!=null && isset($_GET['$email']) && $_GET['email']!=null) {
    $hash = $_GET['hash'];
    $email = $_GET['email'];
    if (isset($_SESSION['user_log'])) {
      $user->activeAccount();
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
        <div class="contenido">
          <h1 style="text-align: center;padding-top: 120px;padding-bottom: 40px;">Todo listo, <b style="color: var(--hovercolor1);"><?php print $username ?></b></h1>
          <h3 style="text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en unos momentos.</h3>
          <script type="text/javascript">
            setTimeout(function () {
                window.location.href = "index.php";
              }, 3000);
          </script>
        </div>
      </body>
      </html>
      <?php
    } else {
      header('Location: login.php?email='.$email.'&hash='.$hash);
    }
  }
 ?>
