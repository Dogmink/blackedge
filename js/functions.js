let formulario = document.getElementById('formulario');
let errEmail = document.getElementById('failEmail');
let errUsername = document.getElementById('failUsername');
let errPassword = document.getElementById('failPass');

formulario.addEventListener('submit', function(e) {
  e.preventDefault();
  let datos = new FormData(formulario);

  fetch('https://blackedgestore.com/useractions.php', {
      method: 'POST',
      body: datos
    })
    .then(res => res.json())
    .then(data => {
      console.log(data)
      if (data == 1) {
        console.log('Es valor 1, eso quiere decir que estoy funcionando.')
      } else if (data == 4){
        errPassword.style.display = 'block'
      }
    })
})
