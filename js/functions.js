var formulario = document.getElementById('formRegister');
var textError = document.getElementById('logErrorText');

if (formulario) {
  formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un clic.');
  });
}else{
  console.log('No se encontró formulario.');
}
