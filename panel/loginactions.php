<?php
include '../resources/user.php';
$user = new BlackEdgeStore\User;
$username = "";
$email = "";
$password = "";

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
        ?>
        <script type="text/javascript">
        window.location= '../userconfig.php';
        </script>
        <?php
    }
  }

}

 ?>
