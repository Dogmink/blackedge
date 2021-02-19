<?php

  if ($_SESSION[user_log] != null) {
    $user = $_SESSION[user_log];
    if ($user[admin] === 9) {
      require '../Modulos/basicPanel.php';
    }else{
      header('../index.php');
    } 
  }else{
    header('../index.php');
  }



?>