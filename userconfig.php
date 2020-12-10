<?php
    require 'Modulos/basic.php';
    $err;
    $edit;
    if (isset($_GET['err']) && $_GET['err']!=null && is_numeric($_GET['err'])) {
      $err = $_GET['err'];
    }

  if (isset($_SESSION['user_log']) & $_SESSION['user_log'] != null ) {
    $usr = $_SESSION['user_log'];
    if (isset($_GET['edit']) & $_GET['edit'] != null){
      $edit = $_GET['edit'];
      if ($edit == 1) {
      ?>
      <div class="contenido-userconfig">
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
          <input class="input-userconfig-readonly" type="email" name="email" value="<?php print $usr['email']?>" readonly="readonly">
        </div>
        <div class="col6">
          <input class="input-userconfig-readonly" type="password" name="password" value="<?php print $usr['password']?>" readonly="readonly">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <a class="btn-edit-userconfig" href="userconfig.php?edit=2">EDITAR DATOS</a>
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <p class="header-userconfig">Configuración de información de compra.</p>
        </div>
      </div>
      <div class="separator"></div>
      <form class="" action="./panel/loginactions.php" method="POST">
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
          <input class="input-userconfig" type="text" name="nombres" value="<?php print $usr['nombres'] ?>">
        </div>
        <div class="col3">
          <input class="input-userconfig" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>">
        </div>
        <div class="col3">
          <input class="input-userconfig" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>">
        </div>
        <div class="col3">
          <input class="input-userconfig" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>">
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
          <input class="input-userconfig" type="text" name="direc" value="<?php print $usr['direc'] ?>">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <input class="btn-edit-userconfig" type="submit" name="accion" value="GUARDAR">
        </div>
      </div>
    </form>
    </div>
      <?php
    } else if($edit == 2){
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
          <input class="input-userconfig" type="email" name="email" value="<?php print $usr['email']?>">
        </div>
        <div class="col6">
          <input class="input-userconfig" type="password" name="password" value="<?php print $usr['password']?>">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <input class="btn-edit-userconfig" type="submit" name="accion" value="GUARDAR CONFIG. DE ACC.">
        </div>
      </div>
    </form>
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
          <input class="input-userconfig-readonly" type="text" name="nombres" value="<?php print $usr['nombres'] ?>" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="number" name="telf" pattern=".{9,9}" maxlength="9" value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>" readonly="readonly">
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
          <input class="input-userconfig-readonly" type="text" name="direc" value="<?php print $usr['direc'] ?>" readonly="readonly">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <a class="btn-edit-userconfig" href="userconfig.php?edit=1">EDITAR DATOS</a>
        </div>
      </div>
    </div>
      <?php
    }
  } else {
      ?>
      <div class="contenido-userconfig">
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
          <input class="input-userconfig-readonly" type="email" name="email" value="<?php print $usr['email']?>" readonly="readonly">
        </div>
        <div class="col6">
          <input class="input-userconfig-readonly" type="password" name="password" value="<?php print $usr['password']?>" readonly="readonly">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <a class="btn-edit-userconfig" href="userconfig.php?edit=2">EDITAR DATOS</a>
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
          <input class="input-userconfig-readonly" type="text" name="nombres" value="<?php print $usr['nombres'] ?>" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="number" name="dni" pattern=".{8,8}" maxlength="8" value=
          <?php if($usr['dni']!=null){
             if($usr['dni'] == 0){
                ?>""<?php
              }else{
                ?>"<?php print $usr['dni']; ?>"<?php
              }  ?>
              readonly="readonly">
              <?php
              }
              ?>
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" type="number" name="telf" pattern=".{8,9}" maxlength="9" value=
          <?php if($usr['telf']!=null){
             if($usr['telf'] == 0){
                ?>""<?php
              }else{
                ?>"<?php print $usr['telf']; ?>"<?php
              }  ?>
              readonly="readonly">
              <?php
              }
              ?>
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
          <input class="input-userconfig-readonly" type="text" name="direc" value="<?php print $usr['direc'] ?>" readonly="readonly">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <a class="btn-edit-userconfig" href="userconfig.php?edit=1">EDITAR DATOS</a>
        </div>
      </div>
    </div>
      <?php
    }
}else {
  header('Location: index.php');
}

?>
