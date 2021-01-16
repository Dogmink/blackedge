let formulario = document.getElementById('formulario');
let formlarioLog = document.getElementById('formularioLog');
let errEmail = document.getElementById('failEmail');
let errUsername = document.getElementById('failUsername');
let errPassword = document.getElementById('failPass');
let successReg = document.getElementById('successReg');
let formRegister = document.getElementById('formRegister');
let formLogin = document.getElementById('formLogin');
let linkForm = document.getElementById("linkRegister");
let errMatch = document.getElementById('errMatch');
let turnForm;

if (formulario) {
  formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    let datos = new FormData(formulario);
    errEmail.style.display = 'none';
    errUsername.style.display = 'none';
    errPassword.style.display = 'none';

    fetch('https://blackedgestore.com/useractions.php', {
        method: 'POST',
        body: datos
      })
      .then(res => res.json())
      .then(data => {
        console.log(data)
        if (data == 1) {
          changeForm()
        } else if (data == 2) {
          errUsername.style.display = 'block'
        } else if (data == 3) {
          errEmail.style.display = 'block'
        } else if (data == 4) {
          errPassword.style.display = 'block'
        } else {
          console.log('Ocurrió un error, intenta registrate de nuevo.')
        }
      })
  })
}

if (formlarioLog) {
  formlarioLog.addEventListener('submit', function (e) {
    e.preventDefault();
    let datos = new FormData(formularioLog);
    errMatch.style.display = 'none';

    fetch('https://blackedgestore.com/useractions.php', {
        method: 'POST',
        body: datos
      })
      .then(res => res.json())
      .then(data => {
        console.log(data)
        if (data == 1) {
          window.location = '../index.php'
        } else if (data == 2) {
          errMatch.style.display = 'block'
        } else {
          console.log('Ocurrió un error, intenta ingresar de nuevo.')
        }
      })
  })
}

function changeForm() {
  if (formRegister.style.display == 'block') {
    formRegister.style.display = 'none';
    formLogin.style.display = 'block';
  } else if (formLogin.style.display == 'block') {
    formLogin.style.display = 'none';
    formRegister.style.display = 'block';
  }
}


let formUserconfig = document.getElementById('fUserconfig');
let fNombres = document.getElementById('fNombres');
let fApellidos = document.getElementById('fApellidos');
let fDNI = document.getElementById('fDNI');
let fTelf = document.getElementById('fTelf');
let fDirec = document.getElementById('fDirec');
let fEmail = document.getElementById('fEmail');
let fPassword = document.getElementById('fPassword');

if (formUserconfig) {
    fetch('https://blackedgestore.com/complemento.php')
    .then(response => response.json())
    .then(data => {
      console.log(data)
      fEmail.value = data.email
      fPassword.value = data.password
      fNombres.value = data.nombres
      fApellidos.value = data.apellidos
      if (data.dni == 0) {
        fDNI.value = "";
      }else{
        fDNI.value = data.dni
      }
      if (data.telf == 0) {
        fTelf.value = "";
      }else{
        fTelf.value = data.telf
      }
      fDirec.value = data.direc
    })
}


let btnUserconfigShop = document.getElementById('btnUserconfigShop');

if(btnUserconfigShop){
  btnUserconfigShop.addEventListener('submit', function (e) {
    e.preventDefault();
    btnUserconfigShop.value = 'GUARDAR';
    fNombres.readonly = '';
    fApellidos.readonly = '';
    fDNI.readonly = '';
    fTelf.readonly = '';
    fDirec.readonly = '';
  })
}

