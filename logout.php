<?php
session_start();
if (isset($_SESSION['user_log'])){
  unset($_SESSION['user_log']);
  header('Location: index.php');
}else{
  header('Location: index.php');
}
 ?>
