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



    function errorLogin($logErr){
        $logErr = "Las credenciales son incorrectas";
        print $logErr;
    }


  function userRegister($_params, $username, $email){
      $sql = "INSERT INTO user (username, password, email) VALUES (:username, SHA(:password), :email)";

      $result = $this->cn->prepare($sql);


      $_array = array(
        ":username" => $_params['username'],
        ":password" => $_params['password'],
        ":email" => $_params['email'],
      );

      $to = $email;
      $subject = "BlackEdge store | correo de verificación";
      $message = '

      Gracias por registrarte de BlackEdge Store,

      Tu cuenta ha sido creada exitosamente, ahora necesitamos verificar tu correo electronico.

      Por favor da click en el siguiente enlace para activar tu cuenta:

      blackedgestore.com/activar.php?email='.$email.'&hash='.$hash.'

      Detalles de tu cuenta:

      Usuario: '$username'
      Correo: '$email'

      Gracias por su atención, BlackEdge store.
      ';

      $header_ = 'From:info@blackedgestore.com' . "\r\n";

      if($result->execute($_array)){
        mail($to, $subject, $message, $header_);
        ?>
        <script type="text/javascript">
          window.location= '../login.php';
        </script>
        <?php
      }
    }
  function validateUsername($username){
    $sql = "SELECT COUNT(username) as num FROM user WHERE username = :username";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($row['num']>0) {
      ?>
      <script type="text/javascript">
        window.location= '../register.php?aler=0';
      </script>
      <?php
      die();
    }
  }

  function activationEmail($email, $hash){
    $sql = "SELECT * FROM user WHERE email = :email AND hash = :hash";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':hash', $hash);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    if($row['mail']>0){
      ?>
        <script type="text/javascript">
          setTimeout('window.location = "index.php"',30000);
        </script>
      <?php

    } else {
      ?>
      <script type="text/javascript">
        setTimeout('window.location = "index.php"',30000);
      </script>
      <?php
    }
  }

  function validateActiveUser(){
    if (isset($_SESSION['user_log'])) {
      $userLog = $_SESSION['user_log']
      $sql= "SELECT COUNT(username) as user FROM user WHERE username = :username AND active = 0";
      $stmt = $this->cn->prepare($sql);
      $stmt->bindParam(':username', $userLog['username']);
      $row = $stmt->fetch(\PDO::FETCH_ASSOC);
      if ($row['user']>0) {
        ?>
        <h2 class="brand-text">Por favor valide su correo electronico.</h2>
        <?php
      } else {

      }
    }
  }

  function activateUser($email){
    $active = 1;
    $sql = "UPDATE user SET active = :active WHERE email = :email";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindParam(':active', $active);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
  }


  function validateEmail($email){
    $sql = "SELECT COUNT(email) as mail FROM user WHERE email = :email";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($row['mail']>0) {
      ?>
      <script type="text/javascript">
        window.location= '../register.php?aler=1';
      </script>
      <?php
      die();
    }
  }

  function validateErr($aler){
    $alerta = array(
      '0' => "El nombre de usuario ya está en uso.",
      '1' => "El correo electronico ya está registrado.",
      '2' => "Las contraseñas no coinciden.",
    );
    print $alerta[$aler];
  }

  function validateLog($userlog){
    $sql = "SELECT COUNT(id) as userid FROM user WHERE id = :id";
    $stmt = $this->cn->prepare($sql);
    $stmt->bindValue(':email', $userlog['id']);
    $stmt->execute();
    $r=$stmt->fetch(\PDO::FETCH_ASSOC);
    if ($r['userid']>0) {
      ?>
      <script type="text/javascript">
        window.location= '../index.php';
      </script>
      <?php
    }

  }


  }
 ?>
