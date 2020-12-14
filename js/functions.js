let formulario = document.getElementById('formulario');

  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
     let datos = new FormData(formulario);
     console.log(datos.get('username'));
     console.log(datos.get('email'));
});
