<?php
    session_start();
    $divice = 'S/. ';
    $year = date('Y');
    require 'functions.php';


 ?>
<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link class='iconweb' rel="icon" type="image/png" href="/images/icon/shop.png" />
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
  <nav class="fadeInDown">
    <div class="BlackEdge_image">
      <a href="index.php"><img class="logo" src="images/Logo/LogoBlack.png"></a>
    </div>
    <div class="nav_options"></div>
      <ul>
        <li><a href="#">FAQS</a></li>
        <li><a href="productos.php">PRODUCTOS</a></li>
        <?php
        if (isset($_SESSION['user_log'])) {
          $user = $_SESSION['user_log'];
          ?>
          <li><a href="#" class="login-user"><?php print $user['username'];  ?></a>
            <ul>
              <li><a href="#">Perfil</a></li>
              <li><a href="#">Configuración</a></li>
              <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
          </li>
          <?php
        }else{
          ?>
          <li><a href="login.php">LOGIN</a></li>
          <?php
        }
         ?>
        <li><a href="shopping-cart.php"><?php print cantidadDesign(); ?><img class="icon-shop-nav" src="images/icon/shop.png"></a></li>
      </ul>
    </nav>

      <!-- Aquí acaba el nav -->
