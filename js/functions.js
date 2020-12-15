let formulario = document.getElementById('formulario');

formulario.addEventListener('submit', function(e) {
  e.preventDefault();
  let datos = new FormData(formulario);

  fetch('../panel/loginactions.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      console.log(data);
    })
})
