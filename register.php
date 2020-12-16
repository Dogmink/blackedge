<?php
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

<html lang='es'>
<head><meta charset="gb18030">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link class='iconweb' rel="icon" type="image/png" href="/images/icon/IconWeb.png" />
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/anim.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css">
  <title>BlackEdge</title>
</head>
<body>
    <?php
    if (isset($_SESSION['user_log'])) {
      $user = $_SESSION['user_log'];
      $active = $user['active'];
      if ($active != 1) {
        ?>
        <div class="contenido-alert-active">
          <p style=" color: var(--hovercolor1); font-size: 18px; text-align: center;"><b>Valida tu email con el mensaje que se envió a tu correo, si no lo haces tu cuenta se eliminará en 30 días.</b></p>
        </div>
        <?php
      }
    }

     ?>
  <div class="contenido fadeInDown">
    <div class="BlackEdge_image">
      <a href="index.php"><img class="logo" src="images/Logo/LogoBlack3.png"></a>
    </div>
        <div class = "content-login">
         <p class="login-header">Register</p>
         <form id="formulario" class="form-login">
           <div id="failUsername" style="display: none">
             <p class="error-login">El <b>nombre de usuario</b> ya está en uso.</p>
           </div>
           <input id="input" class="input-login" type="text" name="username" id="nombre" value="" placeholder="Nombre de usuario" autocomplete="off" required>
           <div id="failEmail" style="display: none">
             <p class="error-login">El <b>correo electronico</b> ya está en uso.</p>
           </div>
           <input id="input" class="input-login" type="email" id="correo" name="email" value="" placeholder="Correo" autocomplete="off" required>
           <div id="failPass" style="display: none">
             <p class="error-login">Las <b>contraseñas</b> no coinciden</p>
           </div>
           <input id="input" class="input-login" type="password" name="password" value="" placeholder="•••••••••" autocomplete="off" required>
           <input id="input" class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••" autocomplete="off" required>
           <input id="input" type="hidden" name="accion" value="registro">
           <input id="input" id="pushData" class="btn-login" type="submit">
           <p class="register-text">¿Ya tienes cuenta? <a class="register-text-link" href="login.php">Haz clic aquí</a></p>
         </form>
        </div>
   </div>
<?php
  require 'Modulos/footer.php';
 ?>

</div>
