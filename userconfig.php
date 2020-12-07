<?php
    require 'Modulos/basic.php';

  if (isset($_SESSION['user_log']) & $_SESSION['user_log'] != null ) {


    if (isset($_GET['edit']) & $_GET['ediT'] == 1){

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
              <input class="input-login" type="email" name="email" value="<?php $usr['email']?>" readonly="readonly">
            </div>
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Contraseña</label>
              <input class="input-login" type="password" name="password" value="<?php $usr['password']?>" readonly="readonly">
            </div>
          </div>
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de información de compra.</h1>
          </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="text" name="nombres" value="<?php $usr['nombres'] ?>">
            </div>
            <div class="col6">
              <input class="input-login" type="text" name="apellidos" value="<?php $usr['apellidos'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php $usr['dni'] ?>">
            </div>
            <div class="col6">
              <input class="input-login" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php $usr['telf'] ?>">
            </div>
        </div>
        <div class="row">
          <div class="col12">
              <input class="input-login" type="text" name="direc" value="<?php $usr['direc'] ?>">
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
    } else {
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
              <input class="input-login" type="email" name="email" value="<?php $usr['email']?>" readonly="readonly">
            </div>
            <div class="col6">
              <label class="input-login" class="label-user-data" for="">Contraseña</label>
              <input class="input-login" type="password" name="password" value="<?php $usr['password']?>" readonly="readonly">
            </div>
          </div>
        <div class="row">
          <div class="col12">
            <h1 class="login-header">Configuración de información de compra.</h1>
          </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="text" name="nombres" value="<?php $usr['nombres'] ?>"<?php if ($usr['nombres']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
            <div class="col6">
              <input class="input-login" type="text" name="apellidos" value="<?php $usr['apellidos'] ?>"<?php if ($usr['apellidos']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
        </div>
        <div class="row">
            <div class="col6">
              <input class="input-login" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php $usr['dni'] ?>"<?php if ($usr['dni']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
            <div class="col6">
              <input class="input-login" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php $usr['telf'] ?>"<?php if ($usr['telf']!=null) { ?> readonly="readonly" <?php } ?>>
            </div>
        </div>
        <div class="row">
          <div class="col12">
              <input class="input-login" type="text" name="direc" value="<?php $usr['direc'] ?>"<?php if ($usr['direc']!=null) { ?> readonly="readonly" <?php } ?>>
          </div>
        </div>
        <div class="row">
          <div class="col12">
            <a class="btn-panel" href="userconfig.php?edit=1">Editar información</a>
          </div>
        </div>
      </form>
      </div>

      <?php
    }
  } else {
    header('Location: index.php');
  }
?>
