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
        $message ='
          Gracias por registrarte en BlackEdge Store'.$username.'
          Activa tu <b>cuenta</b> con este enlace:
          blackedgestore.com/activeacount.php?email='.$email.'&hash='.$hash.'
          No compartas tu credenciales con nadie.
          Atte. BlackEdge Store
        ';
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\b";
          $headers .= 'From: name' . "\r\n";
          $headers = 'From:noreply@blackedgestore.com' . "\r\n";
          mail($to, $subject, $message, $headers);
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
        window.location= '../register.php?err=0';
      </script>
      <?php
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
      ?>
      <script type="text/javascript">
        window.location= '../register.php?err=1';
      </script>
      <?php
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
