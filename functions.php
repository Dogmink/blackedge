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
           <a href="product_detail.php?id=<?php print $item['id']  ?>"> VER MÁS </a>
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
           <a href="product_detail.php?id=<?php print $item['id']  ?>"> VER MÁS </a>
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
          <a href="product_detail.php?id=<?php print $item['id']  ?>"> VER MÁS </a>
        </div>
      </div>
      <?php
      }
    }
 ?>
