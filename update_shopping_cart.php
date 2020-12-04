<?php


session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  require 'functions.php';
  $id = $_POST['id'];
  $cantidad = $_POST['cantidad'];

  if(is_numeric($cantidad)){
    if(array_key_exists($id, $_SESSION['shopping']))
      updateDesign($id, $cantidad);
  }
}
header('Location: shopping-cart.php');
?>
