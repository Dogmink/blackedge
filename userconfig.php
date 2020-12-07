<?php
    require 'Modulos/basic.php';

  if (isset($_SESSION['user_log']) & $_SESSION['user_log'] != null ) {


    if (isset($_GET['edit']) & $_GET['edit'] == 1){
      ?>
      <div class="contenido-userconfig">
      <form class="" action="./panel/userloginactions" method="post">
      <div class="row-userconfig">
        <div class="col12">
          <p class="header-userconfig">Configuración de acceso</p>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col6">
          <label for="email" class="label-userconfig">Correo electronico</label>
        </div>
        <div class="col6">
          <label for="password" class="label-userconfig">Contraseña</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col6">
          <input class="input-login" type="email" name="email" value="<?php print $usr['email']?>">
          <span class="input-border"></span>
        </div>
        <div class="col6">
          <input class="input-login" type="password" name="password" value="<?php print $usr['password']?>" readonly="readonly">
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <p class="header-userconfig">Configuración de información de compra.</p>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col3">
          <label for="nombres" class="label-userconfig">Nombres</label>
        </div>
        <div class="col3">
          <label for="apellidos" class="label-userconfig">Apellidos</label>
        </div>
        <div class="col3">
          <label for="dni" class="label-userconfig">DNI</label>
        </div>
        <div class="col3">
          <label for="telf" class="label-userconfig">Celular o Telefono</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col3">
          <input class="input-login" type="text" name="nombres" value="<?php print $usr['nombres'] ?>">
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-login" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>">
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-login" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php print $usr['dni'] ?>">
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-login" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php print $usr['telf'] ?>">
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <label for="direc" class="label-userconfig">Dirección</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col12">
          <input class="input-login" type="text" name="direc" value="<?php print $usr['direc'] ?>">
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <input class="btn-edit-userconfig" type="submit" name="editaruser" value="GUARDAR CAMBIOS">
        </div>
      </div>
    </form>
    </div>
      <?php
    } else {
      ?>
      <div class="contenido-userconfig">
      <form class="" action="./panel/loginactions.php" method="post">
      <div class="row-userconfig">
        <div class="col12">
          <p class="header-userconfig">Configuración de acceso</p>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col6">
          <label for="email" class="label-userconfig">Correo electronico</label>
        </div>
        <div class="col6">
          <label for="password" class="label-userconfig">Contraseña</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col6">
          <input class="input-userconfig" type="email" name="email" value="<?php print $usr['email']?>" readonly="readonly">
          <span class="input-border"></span>
        </div>
        <div class="col6">
          <input class="input-userconfig" type="password" name="password" value="<?php print $usr['password']?>" readonly="readonly">
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <p class="header-userconfig">Configuración de información de compra.</p>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col3">
          <label for="nombres" class="label-userconfig">Nombres</label>
        </div>
        <div class="col3">
          <label for="apellidos" class="label-userconfig">Apellidos</label>
        </div>
        <div class="col3">
          <label for="dni" class="label-userconfig">DNI</label>
        </div>
        <div class="col3">
          <label for="telf" class="label-userconfig">Celular o Telefono</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col3">
          <input class="input-userconfig" type="text" name="nombres" value="<?php print $usr['nombres'] ?>"<?php if ($usr['nombres']!=null) { ?> readonly="readonly" <?php } ?>>
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-userconfig" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>"<?php if ($usr['apellidos']!=null) { ?> readonly="readonly" <?php } ?>>
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-userconfig" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php print $usr['dni'] ?>"<?php if ($usr['dni']!=null) { ?> readonly="readonly" <?php } ?>>
          <span class="input-border"></span>
        </div>
        <div class="col3">
          <input class="input-userconfig" type="number" name="telf" pattern=".{8,9}" maxlength="9" value="<?php print $usr['telf'] ?>"<?php if ($usr['telf']!=null) { ?> readonly="readonly" <?php } ?>>
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <label for="direc" class="label-userconfig">Dirección</label>
        </div>
      </div>
      <div class="row-userconfig">
        <div class="col12">
          <input class="input-userconfig" type="text" name="direc" value="<?php print $usr['direc'] ?>"<?php if ($usr['direc']!=null) { ?> readonly="readonly" <?php } ?>>
          <span class="input-border"></span>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <a class="btn-editar-userconfig" href="userconfig.php?edit=1">EDITAR DATOS</a>
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
