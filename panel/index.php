<?php
  session_start();
  if ($_SESSION[user_log] != null) {
    $user = $_SESSION[user_log];
    if ($user[admin] == 9) {
      require '../Modulos/basicPanel.php';
      ?>
      





      <?php
      require '../Modulos/footer.php';
    }else{
      header('Location: ../index.php');
    } 
  }else{
    header('Location: ../index.php');
  }



?>
  