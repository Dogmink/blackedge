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
        <a href="index.php" class="nav-link">
          <span class="link-text logo-text">BlackEdge</span>
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img"
            version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path class="fa-primary" fill="currentColor" d="M501.3,350.7c0,0,0.9,5.6,0,14.2c-16.2,92.4-203.8,113.3-245.5,5c-41.4,108.1-229.3,87.6-245.5-5
	            c-0.9-8.6,0-14.2,0-14.2c4-38.2,38.2-46.5,38.2-46.5c-11.4,16.3-6.1,34.7-6.1,34.7c5.5,27.4,62.9,33.8,98.7-4
	            c25.9-27.5,51.1-30,51.1-30c38.2-3.9,63.6,23.9,63.6,23.8c1.4-1.4,26.3-27.7,63.8-23.8c0,0,25.2,2.5,51.1,30
	            c35.8,37.9,93.2,31.4,98.7,4c0,0,5.3-18.4-6.1-34.7C463,304.1,497.3,312.5,501.3,350.7z"/>
            <path class="fa-secondary" fill="currentColor" d="M500.5,132.5C492.2,85.2,451.9,69,403.8,69c-20.6,0-39.8,1.5-55.9,4.6c-20.5,4-37.5,11.3-49.3,24.3
            	c-13.8-0.7-28.7-1.2-44.7-1.2c-14.6,0-28.3,0.4-41.1,1c-11.8-12.8-28.7-20.1-49.2-24c-16.9-3.2-37.2-4.8-58.2-4.8
            	c-29.7,0-53,6.6-69.3,19.5c-13.4,10.7-21.9,25.5-25.2,44c-8.6,49.2,27.1,130.6,97.8,130.6c30.4,0,69.4-16.4,92.6-44.9
            	c18.9-23.2,33.1-55.8,28.1-84.8c7.9-0.2,16.2-0.3,24.8-0.3c9.6,0,18.9,0.2,27.6,0.5c-4.9,28.8,9.2,61.5,28.1,84.7
            	c23.2,28.5,60,44.9,90.4,44.9C479.1,263.1,508,175.5,500.5,132.5z M37.8,143.2c0-5.5,4.5-10,10-10c5.5,0,10,4.5,10,10s-4.5,10-10,10
            	C42.3,153.2,37.8,148.7,37.8,143.2z M98.5,222.8c-2.3,5.1-8.2,7.3-13.2,5.1c-15.2-6.8-28.3-21.7-36.9-42.1c-2.1-5.1,0.2-11,5.3-13.1
            	c5.1-2.1,10.9,0.2,13.1,5.3c6.5,15.4,16.2,26.9,26.6,31.6C98.5,211.9,100.7,217.8,98.5,222.8z M283.5,126.4
            	c-9.9-0.2-20-0.3-30.5-0.3c-8.6,0-16.9,0.1-25,0.2c-2.1-7.8-5-14.5-8.8-20.4c10.3-0.9,21.9-1.4,34.5-1.4c14.3,0,27.2,0.8,38.5,1.8
            	C288.5,112.1,285.6,118.8,283.5,126.4z M463.6,185.8c-8.6,20.4-21.6,35.3-36.8,42.1c-1.3,0.6-2.7,0.9-4.1,0.9
            	c-3.8,0-7.5-2.2-9.1-5.9c-2.2-5,0-11,5.1-13.2c10.4-4.6,20.1-16.1,26.5-31.6c2.1-5.1,8-7.5,13.1-5.3
            	C463.3,174.9,465.7,180.7,463.6,185.8z M464.2,153.2c-5.5,0-10-4.5-10-10s4.5-10,10-10c5.5,0,10,4.5,10,10S469.7,153.2,464.2,153.2z
            	"/>
          </svg>
        </a>
      </li>
	  

      <li id="li-secondary-darkart" class="nav-sub-item">
        <a href="#" class="nav-link">
          <svg class="FadeInLeft" name="secondary-svg-item" aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
            	<path class="fa-secondary" d="M56,56v36.7L92.7,56L56,56z"/>
            	<path class="fa-secondary" d="M280,296H136v-16h144v-16H136v-16h144v-24c0-4.4,3.6-8,8-8h40V24H24v400h112v-72c0-4.4,3.6-8,8-8h136V296z
            		 M136,56h176v16H136V56z M136,88h176v16H136V88z M136,152h176v16H136V152z M136,184h176v16H136V184z M40,144c0-4.4,3.6-8,8-8h64
            		c4.4,0,8,3.6,8,8v64c0,4.4-3.6,8-8,8H48c-4.4,0-8-3.6-8-8V144z M120,400c0,4.4-3.6,8-8,8H48c-4.4,0-8-3.6-8-8v-64c0-4.4,3.6-8,8-8
            		h64c4.4,0,8,3.6,8,8V400z M120,243.3V304c0,4.4-3.6,8-8,8H48c-4.4,0-8-3.6-8-8v-64c0-4.4,3.6-8,8-8h60.7l13.7-13.7l11.3,11.3
            		L120,243.3z M120,51.3V112c0,4.4-3.6,8-8,8H48c-4.4,0-8-3.6-8-8V48c0-4.4,3.6-8,8-8h60.7l13.7-13.7l11.3,11.3L120,51.3z"/>
            	<path class="fa-secondary" d="M104,104V67.3L67.3,104H104z"/>
            	<path class="fa-secondary" d="M104,296v-36.7L67.3,296H104z"/>
            	<path class="fa-secondary" d="M56,344h48v48H56V344z"/>
            	<path class="fa-secondary" d="M56,248v36.7L92.7,248L56,248z"/>
            	<path class="fa-primary" d="M216,360h32v32h-32V360z"/>
            	<path class="fa-primary" d="M264,400c0,4.4-3.6,8-8,8h-48c-4.4,0-8-3.6-8-8v-40h-48v128h160V360h-48V400z M296,472h-32v-16h32V472z M296,440h-32v-16
            		h32V440z"/>
            	<path class="fa-primary" d="M392,360h32v32h-32V360z"/>
            	<path class="fa-primary" d="M360,232h16v32h-16V232z"/>
            	<path class="fa-primary" d="M440,360v40c0,4.4-3.6,8-8,8h-48c-4.4,0-8-3.6-8-8v-40h-48v128h160V360H440z M472,472h-32v-16h32V472z M472,440h-32v-16h32
            		V440z"/>
            	<path class="fa-primary" d="M440,344V232h-48v40c0,4.4-3.6,8-8,8h-32c-4.4,0-8-3.6-8-8v-40h-48v112H440z M424,328h-32v-16h32V328z"/>
            	<path class="fa-secondary" d="M56,152h48v48H56V152z"/>
            </g>
          </svg>

          <span name="secondary-span-item" class="link-text FadeInRight">Pedidos</span>
        </a>
      </li>

      <li id="li-primary-product" class="nav-item">
        <a id="btnProductos" onclick="toggleIcons()" href="#" class="nav-link">
          <svg name="primary-svg-item" aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 		viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<g>
				<g>
					<polygon fill="currentColor" class="fa-primary" points="320,92.3 320,92.1 415.8,135.1 512,99 256,3 0,99 256,195 351.8,159.1 256,119.6 256,119.5 		"/>
				</g>
			</g>
			<g>
				<g>
					<path fill="currentColor" class="fa-secondary" d="M0,131v288l240,90V221L0,131z M128,420l-64-24v-34.1l64,24V420z"/>
				</g>
			</g>
			<g>
				<g>
					<polygon fill="currentColor" class="fa-secondary" points="416,167 416,247.2 352,271.2 352,191 272,221 272,509 512,419 512,131 		"/>
				</g>
			</g>
					</svg>
          <span name="primary-span-item" class="link-text">Productos</span>
        </a>
      </li>

	  <li id="li-primary-faq" class="nav-item">
        <a href="#" class="nav-link">
          <svg name="primary-svg-item" aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 		viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
             <path class="fa-secondary" fill="currentColor" d="M224,230.6l-112-112L45.7,185l-11.3-11.3L112,96l112,112l60-60l44,44l98.3-98.3l11.3,11.3L328,214.6l-44-44
	            L224,230.6z"/>
            <path class="fa-secondary" fill="currentColor" d="M46.7,439.8l-13.3-8.9l134.4-201.6l105.7,146.3l51.6-44.3h107v16H331L270.6,399L168.3,257.3L46.7,439.8z"/>
            <polygon class="fa-primary" fill="currentColor" points="435.7,395.7 424.4,407 444.7,427.3 48,427.3 48,310.2 78.9,285.5 167.3,373.9 303.3,269.9 344,310.6 
            	441.7,213 430.3,201.7 344,288 304.7,248.7 168.7,352.7 80.1,264.1 48,289.7 48,30.6 68.3,50.9 79.6,39.6 40,0 0.4,39.6 11.7,50.9 
            	32,30.6 32,427.3 0,427.3 0,443.3 32,443.3 32,475.3 48,475.3 48,443.3 444.7,443.3 424.4,463.6 435.7,474.9 475.3,435.3 "/>
		</svg>
          <span name="primary-span-item" class="link-text">Estadistica</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link"  id="themeButton">
		  <svg  class="theme-icon" id="lightIcon" aria-hidden="true" focusable="false" data-prefix="fad" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		  	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		  	<path fill="currentColor" d="M256,0C115.2,0,0,115.2,0,256s115.2,256,256,256s256-115.2,256-256S396.8,0,256,0z M256,480
		  		c-124.8,0-224-99.2-224-224c0-76.8,38.4-147.2,102.4-188.8c-3.2,19.2-6.4,41.6-6.4,60.8c0,156.8,128,284.8,284.8,288
		  		C371.2,457.6,316.8,480,256,480z"
				class="fa-secondary"
				/>
		  </svg>
		  <svg class="theme-icon" id="darkIcon" aria-hidden="true" focusable="false" data-prefix="fad" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<path fill="currentColor" d="M256,0C115.2,0,0,115.2,0,256s115.2,256,256,256s256-115.2,256-256S396.8,0,256,0z"
			  	   class="fa-primary"
			/>
			</svg>
          <span class="link-text">Themify</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Aquí acaba el nav -->