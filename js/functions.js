formulario = document.getElementById('formRegister');
textError = document.getElementById('logErrorText');

formulario.addEventListener('submit', function(e) {
  e.preventDefault();
  console.log('me diste un clic.')
});
