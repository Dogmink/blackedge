<?php

  function addDesignToCart($result, $id, $cantidad = 1){
    $_SESSION['shopping'][$id] = array(
      'id' => $result['id'],
      'name' => $result['name'],
      'img' => $result['img'],
      'precio' => $result['precio'],
      'design_desc' => $result['design_desc'],
      'cantidad' => $cantidad
    );
  }



  function updateDesign($id,$cantidad = false){
    if($cantidad){
      $_SESSION['shopping'][$id]['cantidad'] = $cantidad;
    }else {
      $_SESSION['shopping'][$id]['cantidad']+=1;
    }
  }


  function totalPrice(){
      $total = 0;
      if (isset($_SESSION['shopping'])) {
        foreach ($_SESSION['shopping'] as $indice => $value) {
          $total += $value['precio'] * $value['cantidad'];
        }
      }

      return $total;
  }

  function cantidadDesign(){
      $cantidad = 0;
      if (isset($_SESSION['shopping'])) {
        foreach ($_SESSION['shopping'] as $indice => $value) {
          $cantidad++;
        }
      }
      return $cantidad;
  }

  function rows($cantidad, $item, $info_design, $divice, $c, $multiplo){
    ?>
     <div class="contenido fadeInUp">
     <div class="row">
       <div class="col3">
         <div class="nameDesign-shop">
           <p><?php print $item['name'] ?></p>
         </div>
         <?php
         $img = 'images/'.$item['img'];
         if(file_exists($img)){
           ?>
           <div align="center" class="">
             <img align="center" class="design_product_products" src="<?php print $img; ?>">
           <?php }else{?>
             SIN FOTO
           <?php }?>
         </div>
         <div class="desc-product_shop">
           <p><?php print $divice; print $item['precio'] ?></p>
           <a href="product_detail.php?id=<?php print $item['id']  ?>"> <img class="icon-shop" src="images/icon/shop.png"> </a>
         </div>
       </div>
      <?php
    }

  function row($cantidad, $item, $info_design, $divice, $c, $multiplo){
    ?>
     <div class="row">
       <div class="col3">
         <div class="nameDesign-shop">
           <p><?php print $item['name'] ?></p>
         </div>
         <?php
         $img = 'images/'.$item['img'];
         if(file_exists($img)){
           ?>
           <div align="center" class="">
             <img align="center" class="design_product_products" src="<?php print $img; ?>">
           <?php }else{?>
             SIN FOTO
           <?php }?>
         </div>
         <div class="desc-product_shop">
           <p><?php print $divice; print $item['precio'] ?></p>
           <a href="product_detail.php?id=<?php print $item['id']  ?>"> <img class="icon-shop" src="images/icon/shop.png"> </a>
         </div>
       </div>
      <?php
        }


  function col ($item, $info_design, $divice, $c, $cantidad, $multiplo){
    if ($c==1) {
      ?>
    </div>
    <?php
      rows($cantidad, $item, $info_design, $divice, $c, $multiplo);
    }else if ($c%$multiplo==0 ) {
      ?>
    </div>
    <?php
      row($cantidad, $item, $info_design, $divice, $c, $multiplo);
    }else{
      ?>
      <div class="col3">
        <div class="nameDesign-shop">
          <p><?php print $item['name'] ?></p>
        </div>
        <?php
        $img = 'images/'.$item['img'];
        if(file_exists($img)){
          ?>
          <div align="center" class="">
            <img align="center" class="design_product_products" src="<?php print $img; ?>">
          <?php }else{?>
            SIN FOTO
          <?php }?>
        </div>
        <div class="desc-product_shop">
          <p><?php print $divice; print $item['precio'] ?></p>
          <a href="product_detail.php?id=<?php print $item['id']  ?>"> 
          <svg class="icon-shop" aria-hidden="true" focusable="false" data-prefix="fad" role="img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
            	<g>
            		<path class="fa-secondary" fill="currentColor" d="M509.9,89.6c-2.1-2.1-4.3-4.3-8.5-4.3H96L85.3,29.9c0-4.3-6.4-8.5-10.7-8.5h-64C4.3,21.3,0,25.6,0,32s4.3,10.7,10.7,10.7
            			h55.5l51.2,260.3c6.4,34.1,38.4,59.7,72.5,59.7h245.3c6.4,0,10.7-4.3,10.7-10.7s-4.3-10.7-10.7-10.7H192
            			c-17.1,0-34.1-8.5-42.7-23.5l311.5-42.7c4.3,0,8.5-4.3,8.5-8.5L512,96C512,96,512,91.7,509.9,89.6z M450.1,256l-311.5,40.5
            			l-38.4-192h386.1L450.1,256z"/>
            	</g>
            </g>
            <g>
            	<g>
            		<path class="fa-primary" fill="currentColor" d="M181.3,384c-29.9,0-53.3,23.5-53.3,53.3c0,29.9,23.5,53.3,53.3,53.3c29.9,0,53.3-23.5,53.3-53.3
            			C234.7,407.5,211.2,384,181.3,384z M181.3,469.3c-17.1,0-32-14.9-32-32s14.9-32,32-32s32,14.9,32,32S198.4,469.3,181.3,469.3z"/>
            	</g>
            </g>
            <g>
            	<g>
            		<path class="fa-secondary" fill="currentColor" d="M394.7,384c-29.9,0-53.3,23.5-53.3,53.3c0,29.9,23.5,53.3,53.3,53.3c29.9,0,53.3-23.5,53.3-53.3S424.5,384,394.7,384z
            			 M394.7,469.3c-17.1,0-32-14.9-32-32s14.9-32,32-32s32,14.9,32,32S411.7,469.3,394.7,469.3z"/>
            	</g>
            </g>
          </svg>
        </div>
      </div>
      <?php
      }
    }
 ?>
