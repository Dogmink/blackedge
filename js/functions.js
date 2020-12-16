let formulario = document.getElementById('formulario');
let errEmail = document.getElementById('failEmail');
let errUsername = document.getElementById('failUsername');
let errPassword = document.getElementById('failPass');

formulario.addEventListener('submit', function(e) {
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
        console.log('El usuario se ha registrado satisfactoriamente.')
      }else if (data == 2) {
        errUsername.style.display = 'block'
      }else if (data == 3) {
        errEmail.style.display = 'block'
      } else if (data == 4){
        errPassword.style.display = 'block'
      } else {
        console.log('Ocurrió un error, intenta registrate de nuevo.')
      }
    })
})
