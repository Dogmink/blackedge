let formulario = document.getElementById('formulario');
let errEmail = document.getElementById('failEmail');
let errUsername = document.getElementById('failUsername');

formulario.addEventListener('submit', function(e) {
  e.preventDefault();
  let datos = new FormData(formulario);

  fetch('https://blackedgestore.com/useractions.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      if(data == 3){
        console.log('Este email ya se encuentra en uso.');
      } else if(data == 2){
        console.log('Este nombre de usuario ya está en uso.');
      } else {
        console.log('Ocurrió un problema al registrarse, intentanlo nuevamente.')
      }
    })
})
