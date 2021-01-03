<?php
include '../resources/user.php';
$user = new BlackEdgeStore\User;
$username = "";
$email = "";
$password = "";

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ($_POST['accion']==='Ingresar'){
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
              ?>
              <script type="text/javascript">
              window.location= '../index.php';
              </script>
              <?php
          } else {
            ?>
            <script type="text/javascript">
              window.location= '../login.php?logErr=1';
            </script>
            <?php
          }
        }

//-----------------------CONFIG USER------------------------------------//
  if ($_POST['accion']==='GUARDAR'){
    $parametros = array(
      'username'=> $_POST['username'],
      'nombres' => $_POST['nombres'],
      'apellidos' => $_POST['apellidos'],
      'dni' => $_POST['dni'],
      'telf' => $_POST['telf'],
      'direc' => $_POST['direc']
    );
    $resultado = $user->actualizarInfo($parametros);
    if ($resultado) {
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
        ?>
        <script type="text/javascript">
        window.location= '../userconfig.php';
        </script>
        <?php
    }
  }

}

 ?>
