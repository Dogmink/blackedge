let formulario = document.getElementById('formulario');
let textError = document.getElementById('logErrorText');




function validate() {
  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    let datos = new FormData(formulario);

    let dUsername = datos.get('username');
    let dPasssword = datos.get('password');
    let dCPassword = datos.get('password-confirm');

    if (dPasssword == dCPassword) {
      textError.innerHTML = 'Las <b>contraseñas</b> no coinciden.';
    }
  });
}



$(document).ready(function() {
      $("#pushData").click(function(e) {
          e.preventDefault();
          console.log('Me haces click');
      });
    });
