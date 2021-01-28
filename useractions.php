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
            'id'=>$result['id'],
            'username'=>$result['username'],
            'password'=>$result['password'],
            'email'=>$result['email'],
            'nombres'=>$result['nombres'],
            'apellidos'=>$result['apellidos'],
            'dni'=>$result['dni'],
            'telf'=>$result['telf'],
            'direc'=>$result['direc'],
            'img_prof'=>$result['img_prof'],
            'hash'=>$result['hash'],
            'active'=>$result['active'],
            'admin'=>$result['admin']
          );
          echo json_encode(1);
          die();
        }else {
          echo json_encode(2);
          die();
        }
      }
  

// =================USERCONFIG========================

  if ($accion == 'GUARDAR') {
    session_start();
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $telf = $_POST['telf'];
    $direc = $_POST['direc'];
    $usr = $_SESSION['user_log'];
    $u_id = $usr['id'];
    $u_username = $usr['username'];
    $u_active = $usr['active'];
    $parametros = array(
      'id' => $u_id,
      'password' => $password,
      'email' => $email,
      'nombres' => $nombres,
      'apellidos' => $apellidos,
      'dni' => $dni,
      'telf' => $telf,
      'direc' => $direc,
    );
    $result = $user->actualizarInfo($parametros);
    if ($result) {
      echo json_encode($parametros);
      session_start();
      $dataUpdate = $user->checkUser($u_username);
      $_SESSION['user_log'] = $dataUpdate;
      die();
    }else{
      echo json_encode(2);
      die();
    }
  }

  if ($accion == 'resend') {
    session_start();
    $email = $POST['email'];
    $usr = $_SESSION['user_log'];
    $username = $usr['username'];
    $u_active = $usr['active'];
    if ($u_active == 0) {
      $result = $user->resendEmailActivation($username);
      if ($result) {
        $dataUpdate = $user->checkUser($username);
        $_SESSION['user_log'] = $dataUpdate;
        $hash = $dataUpdate['hash'];
        $to = $email;
        $subject = 'BlackEdge | Activación de cuenta.';
        $message = '
        <html>
          <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">
          </head>
          <body style="font-family: "Montserrat", sans-serif;">
            <div style="max-width: 600px;max-height: 1200px;margin:auto;color: var(--blackcolor);margin-top: 150px;justify-content: center;">
              <div style="background-color: #000;color: #fff;width: 100%;height: 100%;text-align: center;padding-bottom: 100px;" class="body-email">
                <h1 style="text-align: center;padding-top: 120px;padding-bottom: 40px;">Bienvenido <b class="var-email">'.$username.'</b></h1>
                <p style="padding: 25px 25px;font-size: 18px;" >Activa tu <b style="padding: 25px 10px;font-size: 18px;" class="var-email">cuenta</b> con el siguiente botón:</p>
                <a style="background-color: #ff0063;padding: 14px;color: #fff;text-decoration: none;text-align: center;" class="var-link" href="blackedgestore.com/active.php?username='.$username.'&hash='.$hash.'"><b>Activar cuenta</b></a>
                <p style="padding: 25px 25px;font-size: 18px;" class="text-email">No compartas tus credenciales con nadie.</p>
                <img style="margin-top: 60px;width: 300px;"class="logo-email" src="https://blackedgestore.com/images/Logo/Logo.png" alt="">
              </div>
            </div>
          </body>
        </html>
          ';
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers.= 'from: BlackEdgeStore Team <noreply@blackedgestore.com>' . "\r\n";
          mail($to, $subject, $message, $headers);
          echo json_encode('Todo bien, amigo');
        die();
      }else{
        echo json_encode(2);
        die();
      }
    }else{
      echo json_encode(34);
    }
  }
?>