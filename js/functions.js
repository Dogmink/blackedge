let formulario = document.getElementById('formulario');
let formlarioLog = document.getElementById('formularioLog');
let errEmail = document.getElementById('failEmail');
let errUsername = document.getElementById('failUsername');
let errPassword = document.getElementById('failPass');
let successReg = document.getElementById('successReg');
let formRegister = document.getElementById('formRegister');
let formLogin = document.getElementById('formLogin');
let linkForm = document.getElementById("linkRegister");
let turnForm;


formulario.addEventListener('submit', function (e) {
  e.preventDefault();
  let datos = new FormData(formulario);
  errEmail.style.display = 'none';
  errUsername.style.display = 'none';
  errPassword.style.display = 'none';

  fetch('https://blackedgestore.com/useractions.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      console.log(data)
      if (data == 1) {
        formRegister.style.display = 'none'
        formLogin.style.display = 'block'
        successReg.style.display = 'block'
      } else if (data == 2) {
        errUsername.style.display = 'block'
      } else if (data == 3) {
        errEmail.style.display = 'block'
      } else if (data == 4) {
        errPassword.style.display = 'block'
      } else {
        console.log('Ocurrió un error, intenta registrate de nuevo.')
      }
    })
})

switch(turnForm){
  case true: 
  formRegister.style.display = 'none';
  formLogin.style.display = 'block';
    linkForm.addEventListener('click', function (e){
      turnForm = !turnForm;
    });
  break;
  case false:
  formLogin.style.display = 'none';
  formRegister.style.display = 'block';
    linkForm.addEventListener('click', function (e){
      turnForm = !turnForm;
    });
  break;
  default:
    formRegister.style.display = 'none';
    formLogin.style.display = 'block';
    linkForm.addEventListener('click', function (e){
      turnForm = !turnForm;
    });
}

