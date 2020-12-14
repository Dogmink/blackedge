let formulario = document.getElementById('formulario');

  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
     let datos = new FormData(formulario);
     console.log(datos.username);
     console.log(datos.email);
});
