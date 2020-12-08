<?php
include 'resources/user.php';
$user = new BlackEdgeStore\User;

$hash = '';
$username = '';

if (isset($_GET['username']) && isset($_GET['hash'])) {
    $hash = $_GET['hash'];
    $username = $_GET['username'];
    $result = $user->validateActiveAccount($username, $hash);
    if ($result) {
      session_start();
      $_SESSION['user_log'] = array(
        'id' => $result['id'],
        'username' => $result['username'],
        'password' => $result['password'],
        'email' => $result['email'],
        'nombres' => $result['nombres'],
        'apellidos' => $result['apellidos'],
        'dni' => $result['dni'],
        'telf' => $result['telf'],
        'direc' => $result['direc'],
        'img_prof' => $result['img_prof'],
        'hash' => $result['hash'],
        'active' => $result['active'],
        'admin' => $result['admin']
      );
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
          <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Todo listo, <b style="color: var(--hovercolor1);"><?php print $username ?></b></h1>
          <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en uno momento.</h3>
          <script type="text/javascript">
          setTimeout(function () {
            window.location.href = "index.php";
          }, 6000);
          </script>
        </div>
      </body>
      </html>
      <?php
    }else{
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
          <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Oops, algo salió <b style="color: var(--hovercolor1);">mal</b></h1>
          <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en uno momento.</h3>
          <script type="text/javascript">
          setTimeout(function () {
            window.location.href = "index.php";
          }, 6000);
          </script>
        </div>
      </body>
      </html>
      <?php
    }
  } else {
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
        <h1 style="font-size: 50px; text-align: center;padding-top: 120px;padding-bottom: 40px;">Oops, algo salió <b style="color: var(--hovercolor1);">mal</b></h1>
        <h3 style="font-size: 25px; text-align: center;padding-top: 50px;padding-bottom: 40px;">Se te redireccionará en uno momento.</h3>
        <script type="text/javascript">
        setTimeout(function () {
          window.location.href = "index.php";
        }, 6000);
        </script>
      </div>
    </body>
    </html>
    <?php
  }
 ?>
