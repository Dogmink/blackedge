<?php
  session_start();
  if ($_SESSION[user_log] != null) {
    $user = $_SESSION[user_log];
    if ($user[admin] == 9) {
      echo 'Hola a todos, soy el admin';
      require '../Modulos/basicPanel.php';
    }else{
      echo 'me mando a index :D';
      header('../index.php');
    } 
  }else{
    echo 'soy una misera arrastrada';
    header('../index.php');
  }



?>