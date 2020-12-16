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
      console.log(data);
    })
})
