<?php
    session_start();
    $divice = 'S/. ';
    $year = date('Y');
    require 'functions.php';

 ?>
<html lang='es'>

<head>
  <meta charset="gb18030">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link class='iconweb' rel="icon" type="image/png" href="/images/icon/IconWeb.png" />
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/anim.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css">
  <title>BlackEdge</title>
</head>

<body>
  <?php
    if (isset($_SESSION['user_log'])) {
        ?>
  <div style="display: none" class="activeAlert" id="activeAlert">
    <p>Valida tu email con el mensaje que se envió a tu correo, si no lo haces tu cuenta se eliminará en 30 días.</p>
  </div>
  <?php
    }

     ?>
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">BlackEdgeStore</span>
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"></path>
            </g>
          </svg>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="cat" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fas fa-skull fa-w-16 fa-9x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M448 96h-64l-64-64v134.4a96 96 0 0 0 192 0V32zm-72 80a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm80 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm-165.41 16a204.07 204.07 0 0 0-34.59 2.89V272l-43.15-64.73a183.93 183.93 0 0 0-44.37 26.17L192 304l-60.94-30.47L128 272v-80a96.1 96.1 0 0 0-96-96 32 32 0 0 0 0 64 32 32 0 0 1 32 32v256a64.06 64.06 0 0 0 64 64h176a16 16 0 0 0 16-16v-16a32 32 0 0 0-32-32h-32l128-96v144a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V289.86a126.78 126.78 0 0 1-32 4.54c-61.81 0-113.52-44.05-125.41-102.4z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M376 144a16 16 0 1 0 16 16 16 16 0 0 0-16-16zm80 0a16 16 0 1 0 16 16 16 16 0 0 0-16-16zM131.06 273.53L192 304l-23.52-70.56a192.06 192.06 0 0 0-37.42 40.09zM256 272v-77.11a198.62 198.62 0 0 0-43.15 12.38z"
                class="fa-primary"></path>
            </g>
          </svg>
          <span class="link-text">Dark Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg version="1.1" id="Capa_1" focusable="false" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
            style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path
              d="M487.4,315.7l-42.6-24.6c4.3-23.2,4.3-47,0-70.2l42.6-24.6c4.9-2.8,7.1-8.6,5.5-14c-11.1-35.6-30-67.8-54.7-94.6
	            c-3.8-4.1-10-5.1-14.8-2.3L380.8,110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7c-36.7-8.2-74.3-7.8-109.2,0
	            c-5.5,1.2-9.4,6.1-9.4,11.7V75c-22.2,7.9-42.8,19.8-60.8,35.1L88.7,85.5c-4.9-2.8-11-1.9-14.8,2.3c-24.7,26.7-43.6,58.9-54.7,94.6
	            c-1.7,5.4,0.6,11.2,5.5,14L67.3,221c-4.3,23.2-4.3,47,0,70.2l-42.6,24.6c-4.9,2.8-7.1,8.6-5.5,14c11.1,35.6,30,67.8,54.7,94.6
	            c3.8,4.1,10,5.1,14.8,2.3l42.6-24.6c17.9,15.4,38.5,27.3,60.8,35.1v49.2c0,5.6,3.9,10.5,9.4,11.7c36.7,8.2,74.3,7.8,109.2,0
	            c5.5-1.2,9.4-6.1,9.4-11.7v-49.2c22.2-7.9,42.8-19.8,60.8-35.1l42.6,24.6c4.9,2.8,11,1.9,14.8-2.3c24.7-26.7,43.6-58.9,54.7-94.6
	            C494.5,324.3,492.3,318.5,487.4,315.7z M256,336c-44.1,0-80-35.9-80-80s35.9-80,80-80s80,35.9,80,80S300.1,336,256,336z" />
          </svg>
          <span class="link-text">Aesthetic Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="space-station-moon-alt" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="svg-inline--fa fa-space-station-moon-alt fa-w-16 fa-5x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M501.70312,224H448V160H368V96h48V66.67383A246.86934,246.86934,0,0,0,256,8C119.03125,8,8,119.0332,8,256a250.017,250.017,0,0,0,1.72656,28.26562C81.19531,306.76953,165.47656,320,256,320s174.80469-13.23047,246.27344-35.73438A250.017,250.017,0,0,0,504,256,248.44936,248.44936,0,0,0,501.70312,224ZM192,240a80,80,0,1,1,80-80A80.00021,80.00021,0,0,1,192,240ZM384,343.13867A940.33806,940.33806,0,0,1,256,352c-87.34375,0-168.71094-11.46094-239.28906-31.73633C45.05859,426.01953,141.29688,504,256,504a247.45808,247.45808,0,0,0,192-91.0918V384H384Z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M256,320c-90.52344,0-174.80469-13.23047-246.27344-35.73438a246.11376,246.11376,0,0,0,6.98438,35.998C87.28906,340.53906,168.65625,352,256,352s168.71094-11.46094,239.28906-31.73633a246.11376,246.11376,0,0,0,6.98438-35.998C430.80469,306.76953,346.52344,320,256,320Zm-64-80a80,80,0,1,0-80-80A80.00021,80.00021,0,0,0,192,240Zm0-104a24,24,0,1,1-24,24A23.99993,23.99993,0,0,1,192,136Z"
                class="fa-primary"></path>
            </g>
          </svg>
          <span class="link-text">Japan Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="space-shuttle" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
            class="svg-inline--fa fa-space-shuttle fa-w-20 fa-5x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M32 416c0 35.35 21.49 64 48 64h16V352H32zm154.54-232h280.13L376 168C243 140.59 222.45 51.22 128 34.65V160h18.34a45.62 45.62 0 0 1 40.2 24zM32 96v64h64V32H80c-26.51 0-48 28.65-48 64zm114.34 256H128v125.35C222.45 460.78 243 371.41 376 344l90.67-16H186.54a45.62 45.62 0 0 1-40.2 24z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M592.6 208.24C559.73 192.84 515.78 184 472 184H186.54a45.62 45.62 0 0 0-40.2-24H32c-23.2 0-32 10-32 24v144c0 14 8.82 24 32 24h114.34a45.62 45.62 0 0 0 40.2-24H472c43.78 0 87.73-8.84 120.6-24.24C622.28 289.84 640 272 640 256s-17.72-33.84-47.4-47.76zM488 296a8 8 0 0 1-8-8v-64a8 8 0 0 1 8-8c31.91 0 31.94 80 0 80z"
                class="fa-primary"></path>
            </g>
          </svg>
          <span class="link-text">MISC</span>
        </a>
      </li>

      <li class="nav-item" id="themeButton">
        <a href="#" class="nav-link">
          <svg class="theme-icon" id="lightIcon" aria-hidden="true" focusable="false" data-prefix="fad"
            data-icon="moon-stars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="svg-inline--fa fa-moon-stars fa-w-16 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z"
                class="fa-primary"></path>
            </g>
          </svg>
          <svg class="theme-icon" id="solarIcon" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="sun"
            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
            class="svg-inline--fa fa-sun fa-w-16 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z"
                class="fa-secondary"></path>
              <path fill="currentColor" d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z" class="fa-primary">
              </path>
            </g>
          </svg>
          <svg class="theme-icon" id="darkIcon" aria-hidden="true" focusable="false" data-prefix="fad"
            data-icon="sunglasses" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
            class="svg-inline--fa fa-sunglasses fa-w-18 fa-7x">
            <g class="fa-group">
              <path fill="currentColor"
                d="M574.09 280.38L528.75 98.66a87.94 87.94 0 0 0-113.19-62.14l-15.25 5.08a16 16 0 0 0-10.12 20.25L395.25 77a16 16 0 0 0 20.22 10.13l13.19-4.39c10.87-3.63 23-3.57 33.15 1.73a39.59 39.59 0 0 1 20.38 25.81l38.47 153.83a276.7 276.7 0 0 0-81.22-12.47c-34.75 0-74 7-114.85 26.75h-73.18c-40.85-19.75-80.07-26.75-114.85-26.75a276.75 276.75 0 0 0-81.22 12.45l38.47-153.8a39.61 39.61 0 0 1 20.38-25.82c10.15-5.29 22.28-5.34 33.15-1.73l13.16 4.39A16 16 0 0 0 180.75 77l5.06-15.19a16 16 0 0 0-10.12-20.21l-15.25-5.08A87.95 87.95 0 0 0 47.25 98.65L1.91 280.38A75.35 75.35 0 0 0 0 295.86v70.25C0 429 51.59 480 115.19 480h37.12c60.28 0 110.38-45.94 114.88-105.37l2.93-38.63h35.76l2.93 38.63c4.5 59.43 54.6 105.37 114.88 105.37h37.12C524.41 480 576 429 576 366.13v-70.25a62.67 62.67 0 0 0-1.91-15.5zM203.38 369.8c-2 25.9-24.41 46.2-51.07 46.2h-37.12C87 416 64 393.63 64 366.11v-37.55a217.35 217.35 0 0 1 72.59-12.9 196.51 196.51 0 0 1 69.91 12.9zM512 366.13c0 27.5-23 49.87-51.19 49.87h-37.12c-26.69 0-49.1-20.3-51.07-46.2l-3.12-41.24a196.55 196.55 0 0 1 69.94-12.9A217.41 217.41 0 0 1 512 328.58z"
                class="fa-secondary"></path>
              <path fill="currentColor"
                d="M64.19 367.9c0-.61-.19-1.18-.19-1.8 0 27.53 23 49.9 51.19 49.9h37.12c26.66 0 49.1-20.3 51.07-46.2l3.12-41.24c-14-5.29-28.31-8.38-42.78-10.42zm404-50l-95.83 47.91.3 4c2 25.9 24.38 46.2 51.07 46.2h37.12C489 416 512 393.63 512 366.13v-37.55a227.76 227.76 0 0 0-43.85-10.66z"
                class="fa-primary"></path>
            </g>
          </svg>
          <span class="link-text">Themify</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Aquí acaba el nav -->