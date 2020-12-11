function register() {
  let formulario = document.getElementById('form-register');
  let error-log = document.getElementById('error-log-text')

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
      error-log.innerHTML = 'Las <b>contraseñas</b> no coinciden.'
    }
  });
}
