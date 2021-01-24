// =============================USER===============================

let activeAlert = document.getElementById('activeAlert');

if (activeAlert) {
  fetch('https://blackedgestore.com/complemento.php')
    .then(response => response.json())
    .then(data => {
      if (data.active == 0) {
        activeAlert.style.display = 'block';
      } else {
        activeAlert.style.display = 'none';
      }
    })
}





// ==========================LOGIN AND REGISTER===============================


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



// ============================USERCONFIG=====================================

let formUserconfig = document.getElementById('fUserconfig');
let cfgAccess = document.getElementById('cfgAccess');
let fNombres = document.getElementById('fNombres');
let fApellidos = document.getElementById('fApellidos');
let fDNI = document.getElementById('fDNI');
let fTelf = document.getElementById('fTelf');
let fDirec = document.getElementById('fDirec');
let fEmail = document.getElementById('fEmail');
let fPassword = document.getElementById('fPassword');

// CONFIG DE ACCESO

if (cfgAccess) {
  let btnUC = document.getElementById('btnUserconfig');
  let resendActive = document.getElementById('resendActive');

  cfgAccess.addEventListener('submit', function (e) {
    e.preventDefault();
    if (btnUC.value == 'Editar Datos') {
      btnUC.value = 'GUARDAR';
      // ATRIBUTOS
      fEmail.removeAttribute('readonly');
      fPassword.removeAttribute('readonly');

      // CLASE
      fEmail.setAttribute('class', 'input-userconfig');
      fPassword.setAttribute('class', 'input-userconfig');

    } else {
      let datos = new FormData(cfgAccess);
      fetch('https://blackedgestore.com/useractions.php', {
          method: 'POST',
          body: datos
        })
        .then(rpt => rpt.json())
        .then(data => {
          console.log(data)
        })
      btnUC.value = 'Editar Datos';
      // ATRIBUTOS
      fEmail.setAttribute('readonly', 'readonly');
      fPassword.setAttribute('readonly', 'readonly');
      // CLASE
      fEmail.setAttribute('class', 'input-userconfig-readonly');
      fPassword.setAttribute('class', 'input-userconfig-readonly');
    }
  })

  resendActive.addEventListener('onclick', function (e) {
    e.preventDefault();
      let datos = new FormData(cfgAccess);
      fetch('https://blackedgestore.com/useractions.php', {
          method: 'POST',
          body: datos
        })
        .then(rpt => rpt.json())
        .then(data => {
          console.log(data)
        })
      btnUC.value = 'Editar Datos';
      // ATRIBUTOS
      fEmail.setAttribute('readonly', 'readonly');
      fPassword.setAttribute('readonly', 'readonly');
      // CLASE
      fEmail.setAttribute('class', 'input-userconfig-readonly');
      fPassword.setAttribute('class', 'input-userconfig-readonly');
    })
  }










// CONFIG DE COMPRA


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
      } else {
        fDNI.value = data.dni
      }
      if (data.telf == 0) {
        fTelf.value = "";
      } else {
        fTelf.value = data.telf
      }
      fDirec.value = data.direc
    })

  // CONDICIONES


  fDNI.addEventListener('input', function () {
    if (this.value.length > 8)
      this.value = this.value.slice(0, 8);
  })
  fTelf.addEventListener('input', function () {
    if (this.value.length > 9)
      this.value = this.value.slice(0, 9);
  })

  // INTERACCIÓN

  let btnUCShop = document.getElementById('btnUserconfigShop');

  formUserconfig.addEventListener('submit', function (e) {
    e.preventDefault();
    if (btnUCShop.value == 'Editar Datos') {
      btnUCShop.value = 'GUARDAR';
      // ATRIBUTOS
      fNombres.removeAttribute('readonly');
      fApellidos.removeAttribute('readonly');
      fDNI.removeAttribute('readonly');
      fTelf.removeAttribute('readonly');
      fDirec.removeAttribute('readonly');
      // CLASE
      fNombres.setAttribute('class', 'input-userconfig');
      fApellidos.setAttribute('class', 'input-userconfig');
      fDNI.setAttribute('class', 'input-userconfig');
      fTelf.setAttribute('class', 'input-userconfig');
      fDirec.setAttribute('class', 'input-userconfig');
    } else {
      let datos = new FormData(formUserconfig);
      fetch('https://blackedgestore.com/useractions.php', {
          method: 'POST',
          body: datos
        })
        .then(rpt => rpt.json())
        .then(data => {
          console.log(data)
        })
      btnUCShop.value = 'Editar Datos';
      // ATRIBUTOS
      fNombres.setAttribute('readonly', 'readonly');
      fApellidos.setAttribute('readonly', 'readonly');
      fDNI.setAttribute('readonly', 'readonly');
      fTelf.setAttribute('readonly', 'readonly');
      fDirec.setAttribute('readonly', 'readonly');
      // CLASE
      fNombres.setAttribute('class', 'input-userconfig-readonly');
      fApellidos.setAttribute('class', 'input-userconfig-readonly');
      fDNI.setAttribute('class', 'input-userconfig-readonly');
      fTelf.setAttribute('class', 'input-userconfig-readonly');
      fDirec.setAttribute('class', 'input-userconfig-readonly');
    }
  })
}