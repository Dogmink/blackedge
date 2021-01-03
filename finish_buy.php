<?php
    require 'Modulos/basic.php';
    include 'resources/design.php';

?>
<div class="contenido">
  <form class="" action="./panel/loginactions.php" id="formUserInfo">
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
        <input type="hidden" name="username" value="<?php print $usr['username'] ?>">
        <input class="input-userconfig" type="text" name="nombres" value="<?php print $usr['nombres'] ?>">
      </div>
      <div class="col3">
        <input class="input-userconfig" type="text" name="apellidos" value="<?php print $usr['apellidos'] ?>">
      </div>
      <div class="col3">
        <input class="input-userconfig" type="number" name="dni" pattern=".{8,8}" maxlength="8"
          value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>">
      </div>
      <div class="col3">
        <input class="input-userconfig" type="number" name="telf" pattern=".{9,9}" maxlength="9"
          value="<?php  if($usr['dni'] == 0){ print "";}else{print $usr['dni'];} ?>">
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