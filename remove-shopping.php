<?php

  session_start();
  if (!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('Location: shopping-cart.php');
    $id = $_GET['id'];
  if (isset($_SESSION['shopping'])){
    unset($_SESSION['shopping'][$id]);
    header('Location: shopping-cart.php');
  }else{
    header('Location: shopping-cart.php');
  }

 ?>
