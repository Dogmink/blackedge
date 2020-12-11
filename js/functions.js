function register() {
  let formulario = document.getElementById('form-register');

  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    let datos = new FormData(formulario);

    let dUsername = datos.get('username');
    let dPasssword = datos.get('password');
    let dCPassword = datos.get('password-confirm');

    if (dPasssword == dCPassword) {
      fetch('../panel/loginactions.php', {
        method: 'POST',
        body: datos
      });
    } else {
      echo '<p class = "error-login">Las contraseñas no coinciden</p>';
    }
  });
}
