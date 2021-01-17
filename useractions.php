<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  
  $accion = $_POST['accion'];
  

// =====================LOGIN AND REGISTER==============================


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
    if ($vUsername) {
      echo json_encode(2);
      die();
    } else if ($vEmail) {
      echo json_encode(3);
      die();
    } else  if ($vEmail == false && $vUsername == false) {
      $user->userRegister($_params);
      echo json_encode(1);
    } else {
      echo json_encode(404);
    }
    
  }
}

  if ($accion =='Ingresar'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $user->userLogin($username, $password);
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
          echo json_encode(1);
          die();
        }else {
          echo json_encode(2);
          die();
        }
      }
  

// =================USERCONFIG========================
    
  // if ($accion == 'GUARDAR') {
    $parametros = array(
      'username' => $_SESSION['userlog'],
      'nombres' => $_POST['name'],
      'apellidos' => $_POST['apellidos'],
      'dni' => $_POST['dni'],
      'telf' => $_POST['telf'],
      'direc' => $_POST['direc'],
      'accion' => $_POST['accion']
    );

    echo json_encode($parametros);

    // echo json_encode("accion = GUARDAR");
    // $result = $user->actualizarInfo($parametros);
    // if ($result) {
      // echo json_encode(1);
      // die();
    // }else{
      // echo json_encode(2);
?>