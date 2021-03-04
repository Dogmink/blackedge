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
let identificator = document.getElementById('identificator');








// CONFIG DE COMPRA


if (formUserconfig) {
  fetch('https://blackedgestore.com/complemento.php')
    .then(response => response.json())
    .then(data => {
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


  // REENVIO DE CÓDIGO


  // INTERACCIÓN

  let btnUCShop = document.getElementById('btnUserconfigShop');

  formUserconfig.addEventListener('submit', function (e) {
    e.preventDefault();
    if (btnUCShop.value == 'Editar Datos') {
      btnUCShop.value = 'GUARDAR';
      identificator.value = 'GUARDAR';

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

function resend() {
  let datos = new FormData(formUserconfig);
  identificator.value = 'resend';
  fetch('https://blackedgestore.com/useractions.php', {
      method: 'POST',
      body: datos
    })
    .then(rpt => rpt.json())
    .then(data => {
      console.log(data)
    })
}

// ==============THEME=========================

let changeThemeBtn = document.getElementById('themeButton');

if (changeThemeBtn) {
  const themeMap = {
    dark: "light",
    light: "dark",
  };
  
  const theme = localStorage.getItem('theme') ||
    (tmp = Object.keys(themeMap)[0],
      localStorage.setItem('theme', tmp),
      tmp);
  const bodyClass = document.body.classList;
  bodyClass.add(theme);
  
  function toggleTheme() {
    const current = localStorage.getItem('theme');
    const next = themeMap[current];
  
    bodyClass.replace(current, next);
    localStorage.setItem('theme', next);
  }
  
  // changeThemeBtn.onclick = toggleTheme; 

    changeThemeBtn.addEventListener('click', function(e){
      e.preventDefault();
      toggleTheme();
    })
}

//====================responsive NAV============================

navBar = document.getElementById('navbar-nav');
navBarStyle = window.getComputedStyle(navBar);
navBarDisplay = navBarStyle.getPropertyValue('display');
logoNav = document.getElementById('logoNav')

if (navBar) {
  if (navBarDisplay != "flex") {
    navBar.setAttribute('class', 'navbar-nav FadeInDownNav');
    setTimeout(function(){
      navBar.setAttribute('class', 'navbar-nav');
    },1000);
  }
}

// =================== ICONOS DINAMICOS ============================


menu = document.getElementsByName('menu');
btnProductos = document.getElementById('btnProductos');
backBtn = document.getElementById('backBtn');
navSpanItems = document.getElementsByName('primary-span-item');
navSVGItems = document.getElementsByName('primary-svg-item');
navSpanSubItems = document.getElementsByName('secondary-span-item');
navVSGSubItems = document.getElementsByName('secondary-svg-item');
liPrimary = document.getElementsByName('li-primary');
liSecondary = document.getElementsByName('li-secondary');


btnProductos.value = 1;

menu[0].addEventListener('click', function(e){
  e.preventDefault();
  toggleIcons();
});

menu[1].addEventListener('click', function(e){
  e.preventDefault();
  toggleIcons();
});


function toggleIcons(){
  if (navBarDisplay != 'flex') {
    if (backBtn.value == 1) {
        navBar.setAttribute('class', 'navbar-nav FadeOutUpNav')
      setTimeout(function(){
        navBar.setAttribute('class', 'navbar-nav FadeInDownNav');
        for (let i = 0; i < liSecondary.length; i++) {
          liSecondary[i].style.display = "none"; 
        }
        for (let i = 0; i < liPrimary.length; i++) {
          liPrimary[i].style.display = "block"; 
        }
        backBtn.value = 0;
        btnProductos.value = 1;
      },1000);
      setTimeout(function(){
        navBar.setAttribute('class', 'navbar-nav');
        logoNav.scrollIntoView({ block: 'end',  behavior: 'smooth' });
      },1200);
    }

    if (btnProductos.value == 1) {
      navBar.setAttribute('class', 'navbar-nav FadeOutUpNav')
      setTimeout(function(){
        navBar.setAttribute('class', 'navbar-nav FadeInDownNav');
        for (let i = 0; i < liPrimary.length; i++) {
          liPrimary[i].style.display = "none"; 
        }
        for (let i = 0; i < liSecondary.length; i++) {
          liSecondary[i].style.display = "block"; 
        }
        btnProductos.value = 0;
        backBtn.value = 1;
      },1000);
      setTimeout(function(){
        navBar.setAttribute('class', 'navbar-nav');
        logoNav.scrollIntoView({ block: 'end',  behavior: 'smooth' });
      },1200);
    }
  }else{

    if (backBtn.value == 1) {
      for (let i = 0; i < navSpanSubItems.length; i++) {
        navSpanSubItems[i].setAttribute('class', 'fadeOutRight');
      }

      for (let i = 0; i < navVSGSubItems.length; i++) {
        navVSGSubItems[i].setAttribute('class', 'fadeOutLeft');
      }

      for (let i = 0; i < navSpanItems.length; i++) {
        navSpanItems[i].setAttribute('class', 'fadeInRight');
        navSVGItems[i].setAttribute('class', 'fadeInLeft');
      }

      setTimeout(function(){
        for (let i = 0; i < liPrimary.length; i++) {
          liPrimary[i].style.display = "block"; 
        }
      
        for (let i = 0; i < liSecondary.length; i++) {
          liSecondary[i].style.display = "none"; 
        }

        btnProductos.value = 1;
        backBtn.value = 0;
      },500);
    }

    if (btnProductos.value == 1) {
      for (let i = 0; i < navSpanItems.length; i++) {
        navSVGItems[i].setAttribute('class', 'fadeOutLeft');
        navSpanItems[i].setAttribute('class', 'fadeOutRight');
      }

      for (let i = 0; i < navSpanSubItems.length; i++) {
        navSpanSubItems[i].setAttribute('class', 'fadeInRight');
      }
      for (let i = 0; i < navVSGSubItems.length; i++) {
        navVSGSubItems[i].setAttribute('class', 'fadeInLeft');
      }
      setTimeout(function(){
        for (let i = 0; i < liSecondary.length; i++) {
          liSecondary[i].style.display = "block"; 
        }

        for (let i = 0; i < liPrimary.length; i++) {
          liPrimary[i].style.display = "none"; 
        }

        btnProductos.value = 0;
        backBtn.value = 1;
      },500);
    }
  } 
}




// ================== DASHBOARD ===========================

let graphics = document.getElementById('chart');

 function totalCasesChart(ctx) {
  const chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [1, 20, 50, 60],
      datasets: [
        {
          label: 'Compras',
          data: [1, 10, 30, 20],
        },
        {
          label: 'Ingreso Neto',
          data: [60, 600, 1800, 1200],
        }
      ]
    }
  })
 }


 function renderGraphics(){
  const ctx = document.querySelector('#chart').getContext('2d')
  totalCasesChart(ctx)
 }

 if (graphics) {
   renderGraphics();
 }
