<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  
  $accion = $_POST['accion'];
  
  if($accion == 'registro'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['password-confirm'];
    
    if($password != $cPassword){
      echo json_encode(4);
    }else{
    $_params = array(
      'username'=>$_POST['username'],
      'password'=>$_POST['password'],
      'email'=>$_POST['email']
    );
    $vUsername = $user->validateUsername($username);
    $vEmail = $user->validateEmail($email);
    $userRegister = $user->userRegister($_params);
    if ($vUsername) {
      echo json_encode(2);
    } else if ($vEmail) {
      echo json_encode(3);
    } else if ($userRegister) {
      echo json_encode(1);
    }else {
      echo json_encode(404);
    }
  }
}
  
?>