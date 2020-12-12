let formulario = document.getElementById('formulario');
let textError = document.getElementById('logErrorText');

if (formulario) {
  validate();
}


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

let validation = validate();

$(document).ready(function() {
      $("#pushData").click(function(e) {
          e.preventDefault();
          if (validation) {
            $.post("../panel/loginactions.php", $("#formulario").serialize(), function(res){
            if (res == 1) {
              $("#success").delay(30).fadeIn("fast");
              window.location('../login.php');
            } else {
              $("#fail").delay(30).fadeIn("fast");
            }
          });
        }
      });
    }
