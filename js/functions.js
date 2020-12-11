var formulario = document.getElementById('formRegister');
var textError = document.getElementById('logErrorText');

formulario.addEventListener('submit', function(e) {
  e.preventDefault();
  console.log('me diste un clic.')
});
