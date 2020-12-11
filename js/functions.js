let formulario = document.getElementById('formulario');
let textError = document.getElementById('logErrorText');

if (formulario) {
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
      textError.innerHTML('Las <b>contraseñas</b> no coinciden.')
    }
  });
}
