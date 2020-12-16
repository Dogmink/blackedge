<?php
  
  $accion = $_POST['accion'];

  if ($accion == "registro") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['password-confirm'];
    echo json_encode('Datos recibidos.');
  
    $_params = array(
      'username'=>$username,
      'password'=>$password,
      'email'=>$email
    );
    include 'resources/user.php';
    $user = new BlackEdgeStore\User;
    $vUsername = $user->validateUsername($username);
    $vEmail = $user->validateEmail($email);
  
    if ($vUsername == 2) {
      echo json_encode(2);
    } else if ($vEmail == 3) {
      echo json_encode(3);
    } else {
      $user->userRegister($_params);
      echo json_encode(1);
    }
  }
?>