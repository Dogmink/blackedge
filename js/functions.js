let formulario = document.getElementById('formulario');
let textError = document.getElementById('logErrorText');




function validate() {
  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    let datos = new FormData(formulario);

    let dUsername = datos.get('username');
    let dEmail = datos.get('email');
    let dPasssword = datos.get('password');
    let dCPassword = datos.get('password-confirm');

    if (dPasssword == dCPassword) {
      textError.innerHTML = 'Las <b>contraseñas</b> no coinciden.';
    }
  });
}

function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)){
   alert("La dirección de email " + valor + " es correcta.");
  } else {
   alert("La dirección de email es incorrecta.");
  }
}

$(document).ready(function() {
      $("#pushData").click(function(e) {
        e.preventDefault();
            $.post("panel/loginactions.php", $("#formulario").serialize(), function(res){
            console.log('enviando datos...');
            .then( res => res.json());
            .then( data => {
              console.log(data)
            });
            if (res == 1) {
              console.log('se enviaron los datos');
              $("#success").delay(30).fadeIn("slow");
              window.location('../login.php');
            } else {
              console.log('no se enciaron los datos');
              $("#fail").delay(30).fadeIn("slow");
              window.location= 'index.php';
              window.location= '../index.php';
            }
          });
      });
    });
