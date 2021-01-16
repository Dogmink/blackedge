<?php
    require 'Modulos/basic.php';
    $err;
    $edit;
    if (isset($_GET['err']) && $_GET['err']!=null && is_numeric($_GET['err'])) {
      $err = $_GET['err'];
    }

  if (isset($_SESSION['user_log']) && $_SESSION['user_log'] != null ) {
    $usr = $_SESSION['user_log'];
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
          <input class="input-userconfig-readonly" id="fEmail" type="email" name="email" value="" readonly="readonly">
        </div>
        <div class="col6">
          <input class="input-userconfig-readonly" id="fPassword" type="password" name="password" value="" readonly="readonly">
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
      <form id="fUserconfig">
      <div class="row-userconfig">
        <div class="col3">
          <input class="input-userconfig-readonly" id="fNombres" type="text" name="nombres" value="" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" id="fApellidos" type="text" name="apellidos" value="" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" id="fDNI" type="number" name="dni" pattern=".{8,8}" maxlength="8" value="" readonly="readonly">
        </div>
        <div class="col3">
          <input class="input-userconfig-readonly" id=fTelf type="number" name="telf" pattern=".{8,9}" maxlength="9" value="" readonly="readonly"> 
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
          <input class="input-userconfig-readonly" id="fDirec" type="text" name="direc" value="" readonly="readonly">
        </div>
      </div>
      <div class="separator"></div>
      <div class="row-userconfig">
        <div class="col12">
          <input type="hidden" name="accion" value="GUARDAR">
          <input class="btn-edit-userconfig" type="submit" id="btnUserconfigShop" value="Editar Datos">
        </div>
      </div>
    </div>
    </form>
      <?php
    } else {
    header('Location: index.php');
  }
  
  require 'Modulos/footer.php'
  ?>

