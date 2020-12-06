<?php
include 'resources/user.php';
$user = new BlackEdgeStore\User;

$hash = '';
$username = '';

if (isset($_GET['username']) && isset($_GET['hash'])) {
    $hash = $_GET['hash'];
    $username = $_GET['username'];
    $user->validateActiveAccount($username, $hash);
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
            <h1 style="text-align: center;padding-top: 120px;padding-bottom: 40px;">Todo listo, <b style="color: var(--hovercolor1);">A</b></h1>
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
      }
 ?>
