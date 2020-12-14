let formulario = getElementById('pushData');

document.addEventListener('DOMContentLoaded', function () {
  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    let datos = new FormData(formulario);
    let dUsername = datos.get('username');
    let dEmail = datos.get('email');
    let dPasssword = datos.get('password');
    let dCPassword = datos.get('password-confirm');
    let vEmail = validarEmail(datos.get('email'));

    if (dPasssword != dCPassword) {
      $("#failPass").delay(30).fadeIn("slow");
    } else if (vEmail == false) {
      $("#failEmail").delay(30).fadeIn("slow");
    } else {
      fetch("panel/loginactions.php", {
        method: 'POST',
        body: datos
      });
    }
  });
});

function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)) {
    alert("La dirección de email " + valor + " es correcta.");
  } else {
    alert("La dirección de email es incorrecta.");
  }
}
