  let formulario = document.getElementById('formRegister');
  let textError = document.getElementById('logErrorText');

  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('me diste un clic.')
  });
