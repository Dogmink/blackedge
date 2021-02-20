<?php

if ($_SESSION[user_log] != null) {
  $user = $_SESSION[user_log];
  if ($user[admin] == 9) {
  require '../Modulos/basicPanel.php';

  ?>
  <main>
    <Canvas id="chart" width="900" height="450"></Canvas>
  </main>
  <?php
require '../Modulos/footerPanel.php';
  }
}
?>
