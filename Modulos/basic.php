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
          <svg aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path class="fa-primary" fill="currentColor"
              d="M256,0C148.2,0,60.8,87.4,60.8,195.2S148.2,512,256,512s195.2-209,195.2-316.8S363.8,0,256,0z M136.2,216.8
	            c-18.1-18.1-10.6-40,7.5-58.1s40-25.7,58.1-7.5c18.1,18.1,18.1,47.5,0,65.6C183.7,234.9,154.3,234.9,136.2,216.8z M256,437.3
	            c-31.8,0-57.6-34.4-57.6-76.8s25.8-76.8,57.6-76.8s57.6,34.4,57.6,76.8S287.8,437.3,256,437.3z M375.8,216.8
	            c-18.1,18.1-47.5,18.1-65.6,0c-18.1-18.1-18.1-47.5,0-65.6c18.1-18.1,40-10.6,58.1,7.5C386.4,176.8,393.9,198.7,375.8,216.8z" />
            <path class="fa-secondary" fill="currentColor"
              d="M256,0c50.8,0,93.2,64.7,104.1,151.5c2.8,2.1,5.5,4.6,8.1,7.2c18.1,18.1,25.7,40,7.5,58.1
	            c-4.2,4.2-9,7.4-14.1,9.7C354.1,338.8,309.7,512,256,512c107.8,0,195.2-209,195.2-316.8C451.2,87.4,363.8,0,256,0z" />
          </svg>

          <span class="link-text">Dark Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 494 494" style="enable-background:new 0 0 494 494;" xml:space="preserve">
            <g>
              <path class="fa-secondary" fill="currentColor" d="M239,84c4.5-3.8,5.2-10.5,1.4-15c-2.4-2.9-6.1-4.3-9.7-3.8C128.2,82.8,53.9,172.5,55.7,276.4
		            c0,8.7,0.7,17.5,1.8,26.1c0.6,4.8,4.5,8.6,9.3,9.2c0.4,0,0.9,0,1.3,0c4.4,0,8.3-2.7,9.9-6.7c16.9-41.8,38.9-81.4,65.5-117.8
		            C171,149,203,114.3,239,84z" />
              <path class="fa-secondary" fill="currentColor" d="M458.4,242.8c-10.5-76.6-62.3-141.2-134.7-168.3c-3.6-1.3-7.6-0.6-10.6,1.9c-19.7,17.1-38.1,35.4-55.3,55
		            c-3.9,4.4-3.5,11.1,0.9,15.1c1.7,1.5,3.9,2.4,6.1,2.6c38.1,3.5,71.3,37.5,83.9,84.5H183.4c-3.5,0-6.8,1.7-8.8,4.6
		            C160.9,258,148,277.7,136.2,297l0,0l0,0c-18.3,28.9-33.5,59.6-45.4,91.7c-1.1,3.3-0.5,6.8,1.5,9.6c0.2,0.3,0.4,0.5,0.6,0.7
		            c36.5,56,98.6,90,165.5,90.6c84.9-0.9,160.1-54.8,188.3-134.9c2.1-5.5-0.7-11.7-6.2-13.7c-1.2-0.5-2.5-0.7-3.8-0.7h-88.5
		            c-4.1,0-7.8,2.3-9.6,5.9c-13.4,33.2-44.6,55.7-80.3,58.1c-41,0-76.6-34.6-90-85.3h279.5c5.3,0.1,9.9-3.9,10.7-9.2
		            c1.7-11.1,2.6-22.3,2.7-33.5C461.1,265.1,460.2,253.9,458.4,242.8z" />
            </g>
            <path class="fa-primary" fill="currentColor" d="M399.5,10.3c-35-25.3-101.7-3.3-174.1,57.2C188,99,154.7,135,126.3,174.7c-27.6,37.9-50.5,79-68,122.5
	              c-0.1,0.4-0.3,0.7-0.4,1.1C23.8,383.8,24.6,455.3,60,480.6c11.6,8.1,25.3,12.7,39.4,13.5c2.4,0,4.8-0.2,7.1-0.7
	              c6.4-1.1,12-4.9,15.4-10.4c3-5,1.4-11.5-3.6-14.6c-6.6-4-26.6-16.3-7.4-72.8c11.4-30.6,25.9-59.9,43.3-87.5
	              c11.7-18.9,24.4-38.4,37.8-57.7l15.1-21.2c20.8-29,43.1-56.9,66.7-83.6c16.5-18.8,34.2-36.5,53.1-53c40.3-34.5,58-33.8,63.8-32
	              s9.7,8.1,12.1,18.5c1.1,5.3,6,8.8,11.4,8.3c5.3-0.5,9.4-4.8,9.7-10.1C425.5,37.8,411.6,19.1,399.5,10.3z" />
          </svg>
          <span class="link-text">Aesthetic Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42.1 42.1"
            style="enable-background:new 0 0 42.1 42.1;" xml:space="preserve">
            <g>
              <g>
                <path class="st0" fill="currentColor"
                  d="M19.1,14.7c-0.5-2.9-6.3,0.4-7.9-0.7C10,13.2,12.6,9.5,13,8.7c0.2-0.4,4.3-0.4,4.9-0.5c1.2-0.2,3.1-0.7,3-2.3
			            c-0.2-2.5-3.5-1.9-5.1-1.5c-3.1,0.8-6.1,1.5-9.3,1.2c-1.2-0.1-4.9-0.4-4,1.9c0.7,1.7,5.8,0.2,5.2,2.1C6.9,12,6,14.3,4.6,16.5
			            c-1.1,1.8-2.4,3.6-3.6,5.4c-0.5,0.8-1.9,2.6-0.2,2.9c1.4,0.2,2.6-1.1,3.4-2c1.6,1,2.6,2.5,4,3.9c0.1,0.1-4.3,5.9-4.7,6.5
			            c-0.7,0.9-2.9,2.9-2,4.2c1.8,2.6,8.3-6.5,9.1-7.5c1.4-1.8,2.8-3.8,3.5-5.9c0.6-1.8,1.6-3.6,2.7-5.2C17.7,17.7,19.3,16.2,19.1,14.7
			            z M10.9,22c-1.2-1.1-2.4-2.2-3.6-3.3c0.3-0.8,0.7-1.6,1.1-2.4c1.4,0.1,2.8,0.2,4.3,0.2C12.1,18.5,12,20.3,10.9,22z"
                  class="fa-secondary" />
                <path class="st0" fill="currentColor" d="M38.3,25.5c-1.8-0.8-3.6-1.4-5.6-1.1c-2.6,0.3-5.2,1.5-7.9,1.1c-1.7-0.2-4.5-2.1-6.1-0.8
			            c-1.1,0.9-0.1,3,0,4.1c0.3,2.1,0.3,4.3,0.8,6.4c0.3,1.2,1.5,6.7,3.8,4.6c0.9-0.9,0.6-2.4,1.9-3c1.2-0.6,2.8-0.2,4.1-0.3
			            c0.9-0.1,1.9-0.1,2.8-0.1c0.6,0,1.2,0,1.8,0c1.3,0,2.7,0.3,4-0.1c2.8-0.9-1.9-3,0.3-4.2c1.3-0.7,3.8-2.6,3.5-4.4
			            C41.6,26.4,39.3,25.9,38.3,25.5z M32.9,32.2c-1.6,0.1-2.9,0-4.4,0.5c-1.2,0.4-2.9,1.4-4.1,0.9c-1.7-0.6-1.5-3.2-1.6-4.6
			            c2.5,0.4,4.5-0.6,6.5-1.2c1.4-0.4,2.8-0.7,4.3-0.6C33.6,28.3,35,32.1,32.9,32.2z" class="fa-secondary" />
                <path class="st0" fill="currentColor"
                  d="M20.3,23.1c2.2,0,4-1.6,5.9-2.3c2-0.7,4.1-1.1,6.2-1.7c1.6-0.4,3.1-0.6,4.5,0.6c1,0.9,2.1,2.4,3.7,1.9
		            	c1.4-0.4,1.8-2.1,1.3-3.3c-0.6-1.5-2.2-2.4-3.5-3.3c-1.6-1-2.9-2.4-4.5-3.4c-1.2-0.8-1.6,0.1-1.5,1.4c0.2,1.5,1.1,3.3-0.7,3.9
		            	c-2.4,0.9-4.9,1.1-7.4,1.4c-0.4,0-0.7-0.1-1.3-0.2c-0.7-0.1,2.7-5.2,3-5.6c1.3-1.6,2.9-2.8,4.2-4.3c1.1-1.3,1.6-3.2,0.6-4.8
		            	c-1.2-1.8-3.2-1.6-5-1.6c0.1,0-0.2,3.7-0.2,4c-0.2,1.4-0.7,2.8-1.3,4.1c-1.7,3.5-5.5,6.4-6.3,10.4C17.7,22,18.5,23.2,20.3,23.1z"
                  class="fa-secondary" />
              </g>
            </g>
          </svg>
          <span class="link-text">Japan Art</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
              <circle class="fa-secondary" cx="256" cy="256" r="64" />
              <circle class="fa-secondary" cx="64" cy="256" r="64" />
              <circle class="fa-secondary" cx="448" cy="256" r="64" />
            </g>
            <path fill="currentColor" d="M256,320c-35.3,0-64-28.7-64-64s28.7-64,64-64s64,28.7,64,64S291.3,320,256,320z M256,224c-17.6,0-32,14.4-32,32
	                s14.4,32,32,32s32-14.4,32-32S273.6,224,256,224z" />
            <path fill="currentColor" d="M64,320c-35.3,0-64-28.7-64-64s28.7-64,64-64s64,28.7,64,64S99.3,320,64,320z M64,224c-17.6,0-32,14.4-32,32s14.4,32,32,32
	                s32-14.4,32-32S81.6,224,64,224z" />
            <path fill="currentColor" d="M448,320c-35.3,0-64-28.7-64-64s28.7-64,64-64s64,28.7,64,64S483.3,320,448,320z M448,224c-17.6,0-32,14.4-32,32
	                s14.4,32,32,32c17.6,0,32-14.4,32-32S465.6,224,448,224z" />
          </svg>
          <span class="link-text">MISC</span>
        </a>
      </li>

      <li class="nav-item" id="themeButton">
        <a href="#" class="nav-link">
          <svg  class="theme-icon" id="lightIcon" aria-hidden="true" focusable="false" data-prefix="fad"
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