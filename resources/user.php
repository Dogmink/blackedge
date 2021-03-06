<?php
namespace BlackEdgeStore;

class User
{
  private $config;
  private $cn = null;

  public function __construct(){

      $this->config = parse_ini_file(__DIR__.'/../config.ini');
      try {
        $this->cn = new \PDO($this->config['dns'], $this->config['user'], $this->config['password'],array(
          \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        $this->cn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->cn->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false );

      } catch (\PDOException $e) {
        echo $e->getMessage();
      }
  }


/*------------- Login and validation account -------------*/

  function userLogin($username, $password){
    $sql = "SELECT * FROM user WHERE username = :username AND password = SHA(:password)";
    $result = $this->cn->prepare($sql);
    $_array = array(
      'username' => $username,
      'password' => $password
    );
    if ($result->execute($_array)) {
        return $result->fetch();
      return false;
    }
  }

  function validateActiveAccount($username, $hash){
    $sql = "SELECT COUNT(username) as useractive FROM user WHERE username = :username AND hash = :hash";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hash', $hash);
    $stmt->execute();
    $row =  $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($row['useractive']>0) {
      $sql = "UPDATE user SET active = 1, hash = null WHERE username = :username";
      $stmt = $this->cn->prepare($sql);
      $stmt->bindParam(':username', $username);
      if ($stmt->execute()) {
            return $stmt->fetch();
          return false;
      }
    }
  }


  function errorLogin($logErr){
        $logErr = "Las credenciales son incorrectas";
        print $logErr;
  }


  function userRegister($_params){
      $sql = "INSERT INTO user (username, password, email, hash) VALUES (:username, SHA(:password), :email, :hash)";

      $result = $this->cn->prepare($sql);
      $hash = md5(rand(0, 1000));

      $_array = array(
        ":username" => $_params['username'],
        ":password" => $_params['password'],
        ":email" => $_params['email'],
        ":hash" => $hash
      );
      if($result->execute($_array)){
        $username = $_array[':username'];
        $email = $_array[':email'];
        $hash = $_array[':hash'];
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
          $headers.= 'from: BlackEdgeStore <noreply@blackedgestore.com>' . "\r\n";
          mail($to, $subject, $message, $headers);
          return 1;
        }
      }

  
  function resendEmailActivation($username){
      $sql = "UPDATE user SET hash = :hash WHERE username = :username";
      $result = $this->cn->prepare($sql);
      $hash = md5(rand(0, 1000));
      $result->bindParam(':username', $username);
      $result->bindParam(':hash', $hash);
      if($result->execute()){
          return true;
        }
      }

  
  function validateUsername($username){
    $sql = "SELECT COUNT(username) as num FROM user WHERE username = :username";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($row['num']>0) {
      return true;
      die();
    }
  }

  function validateEmail($email){
    $sql = "SELECT COUNT(email) as mail FROM user WHERE email = :email";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($row['mail']>0) {
      return true;
      die();
    }
  }

  function validateErr($err){
    $error = array(
      '0' => "El nombre de usuario ya está en uso.",
      '1' => "El correo electronico ya está registrado.",
      '2' => "Las contraseñas no coinciden.",
    );
    print $error[$err];
  }


  function checkUser($username){
    $sql = "SELECT * FROM user WHERE username = :username";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result=$stmt->fetch(\PDO::FETCH_ASSOC);
    if ($result) {
      return $result;
    }
  }

/*----------------------Userconfig--------------*/
  function actualizarInfo($parametros){
        $sql = "UPDATE `user` SET `password` = :password, `email` = :email, `nombres` = :nombres, `apellidos` = :apellidos, `dni` = :dni, `telf` = :telf, `direc` = :direc  WHERE `id` = :id";
        $stmt = $this->cn->prepare($sql);
        $stmt->bindParam(':password',$parametros['password']);
        $stmt->bindParam(':email',$parametros['email']);
        $stmt->bindParam(':nombres',$parametros['nombres']);
        $stmt->bindParam(':apellidos',$parametros['apellidos']);
        $stmt->bindParam(':dni',$parametros['dni']);
        $stmt->bindParam(':telf',$parametros['telf']);
        $stmt->bindParam(':direc',$parametros['direc']);
        $stmt->bindParam(':id',$parametros['id']);
        if ($stmt->execute()){
          return true;
        }else{
          return false;
        }
  }

}

    // function validateEmailUserconfig($email){
    //   $sql = "SELECT COUNT(email) as mail FROM user WHERE email = :email";
    //   $stmt = $this->cn->prepare($sql);
    //   $stmt->bindValue(':email', $email);
    //   $stmt->execute();
    //   $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    //   if ($row['mail']>0) {
    //     return $stmt->fetch();
    //   return false;
    //   }
    // }
 ?>
