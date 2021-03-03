<?php
  include 'resources/user.php';
  $user = new BlackEdgeStore\User;
  $err = "";
  if (isset($_GET['err'])) {
    $err = $_GET['err'];
  }
  require  'Modulos/basic.php';
  if (isset($_SESSION['user_log'])) {
    header('Location: index.php');
  }
 ?>


<main>
    <div class="contenido align-login fadeInUp">
      <div class="row">
        <div class="col12 margin-login scaleAnim" id="formLogin" style="display: block;">
          <div class="content-login">
            <p class="login-header">INGRESAR</p>
            <form id="formularioLog" class="form-login">
              <div id="errMatch" style="display: none">
                <p class="error-login">Las <b>credenciales</b> son incorrectas.</p>
              </div>
              <input class="input-login" type="text" name="username" value="" placeholder="Nombre de usuario"
                autocomplete="off" required>
              <input class="input-login" type="password" name="password" value="" placeholder="•••••••••"
                autocomplete="off" required>
              <input type="hidden" name="accion" value="Ingresar">
              <input class="btn-login" type="submit">
            </form>
            <p class="register-text">¿Aún no tienes cuenta? <a href="#" onclick="javascript:changeForm()"
                class="register-text-link">Haz click aquí</a></p>
          </div>
        </div>
        <div class="col12 margin-login scaleAnim" id="formRegister" style="display: none;">
          <div class="content-login">
            <p class="login-header">REGISTRARSE</p>
            <form id="formulario" class="form-login">
              <div id="failUsername" style="display: none">
                <p class="error-login">El <b>nombre de usuario</b> ya está en uso.</p>
              </div>
              <input class="input-login" type="text" name="username" value="" placeholder="Nombre de usuario"
                autocomplete="off" required>
              <div id="failEmail" style="display: none">
                <p class="error-login">El <b>correo electronico</b> ya está en uso.</p>
              </div>
              <input class="input-login" type="email" id="correo" name="email" value="" placeholder="Correo"
                autocomplete="off" required>
              <div id="failPass" style="display: none">
                <p class="error-login">Las <b>contraseñas</b> no coinciden</p>
              </div>
              <input class="input-login" type="password" name="password" value="" placeholder="•••••••••"
                autocomplete="off" required>
              <input class="input-login" type="password" name="password-confirm" value="" placeholder="•••••••••"
                autocomplete="off" required>
              <input type="hidden" name="accion" value="registro">
              <input class="btn-login" type="submit">
            </form>
            <p class="register-text">¿Ya tienes cuenta? <a href="#" onclick="javascript:changeForm()"
                class="register-text-link">Haz click aquí</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  require 'Modulos/footer.php';
 ?>
  </div>