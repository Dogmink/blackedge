<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BlackEdge / Activación</title>
    <link rel="stylesheet" href="/css/estilosAlert.css">
    <link rel="stylesheet" href="/css/grid.css">
  </head>
  <body>
    <div class="contenido">
      <?php
        if(isset($_GET['email']) && $_GET['email'] == null && isset($_GET['hash']) && $_GET['hash'] == null){
          ?>
          <div class="body-activation">
            <h1>Gracias por activar tu cuenta.</h1>
            <h4>Se te redireccionará en un momento...</h4>
            <p class="brand-text">BlackEdge Store.</p>
          </div>
          <?php
          $user->activationEmail();
        } else {
          ?>
          <h1>Algo salio mal</h1>
          <h4>Se te redireccionará en un momento...</h4>
          <p class="brand-text">BlackEdge Store.</p>
          <?php
          $user->activationEmail()
           ?>
          <?php
        }
       ?>
    </div>
  </body>
</html>
