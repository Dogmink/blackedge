<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  
  $accion = $_POST['accion'];

  echo json_encode($accion);
?>