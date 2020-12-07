<?php

  if (isset($_SESSION['user_log'])) {
    $user = $_SESSION['user_log'];


    if (isset($_GET['edit'])){
      print 'se puede editar'.$user;
      /*
      ?>

      <div class="contenido">
        <form class="form-login" action="./panel/loginactions.php" method="post">
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de acceso y correo</h1>
          </div>
        </div>
          <div class="row">
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Correo electronico</label>
              <input class="input-login" type="email" name="email" value="<?php $user['email']?>" readonly="readonly">
            </div>
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Contraseña</label>
              <input class="input-login" type="password" name="password" value="<?php $user['password']?>" readonly="readonly">
            </div>
          </div>
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de información de compra.</h1>
          </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="text" name="nombres" value="<?php $user['nombres'] ?>">
            </div>
            <div class="col6">
              <input class="input-login" type="text" name="apellidos" value="<?php $user['apellidos'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php $user['dni'] ?>">
            </div>
            <div class="col6">
              <input class="input-login" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php $user['telf'] ?>">
            </div>
        </div>
        <div class="row">
          <div class="col12">
              <input class="input-login" type="text" name="direc" value="<?php $user['direc'] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col12">
            <input class="btn-panel" type="submit" name="userConfigAccess" value="Guardar cambios">
          </div>
        </div>
      </form>
      </div>

      <?php
      */
    } else {
        print 'No se puede editar'.$user;
      /*
      ?>

      <div class="contenido">
        <form class="form-login" action="./panel/loginactions.php" method="post">
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de acceso y correo</h1>
          </div>
        </div>
          <div class="row">
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Correo electronico</label>
              <input class="input-login" type="email" name="email" value="<?php $user['email']?>" readonly="readonly">
            </div>
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Contraseña</label>
              <input class="input-login" type="password" name="password" value="<?php $user['password']?>" readonly="readonly">
            </div>
          </div>
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de información de compra.</h1>
          </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="text" name="nombres" value="<?php $user['nombres'] ?>"<?php if ($user['nombres']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
            <div class="col6">
              <input class="input-login" type="text" name="apellidos" value="<?php $user['apellidos'] ?>"<?php if ($user['apellidos']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php $user['dni'] ?>"<?php if ($user['dni']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
            <div class="col6">
              <input class="input-login" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php $user['telf'] ?>"<?php if ($user['telf']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
        </div>
        <div class="row">
          <div class="col12">
              <input class="input-login" type="text" name="direc" value="<?php $user['direc'] ?>"<?php if ($user['direc']!=null) { ?> readonly="readonly" <?php } ?>>
          </div>
        </div>
        <div class="row">
          <div class="col12">
            <a class="btn-panel" href="userconfig.php?edit=1">Editar información</a>
          </div>
        </div>
      </form>
      </div>

      <?php}
      */
    }

  } else {
    header('Location: index.php');
  }
?>
