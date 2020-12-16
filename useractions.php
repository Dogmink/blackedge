<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  
  $accion = $_POST['accion'];
  
  if($accion == 'registro'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['password-confirm'];
    
    $parametros = array(
      'username'=>$_POST['username'],
      'password'=>$_POST['password'],
      'email'=>$_POST['email']
    );
    
    echo json_encode(1);
  }
  
?>