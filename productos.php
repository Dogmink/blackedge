<?php
  require 'Modulos/basic.php';
 ?>
<main>


  <div class="search-bar-content fadeInUp">

    <div class="row">
      <div class="col12">
        <div class="content-search-shop">
          <input class="search-shop" type="text" name="search" placeholder="¿Qué deseas buscar?">
          <span class="search-shop-border" />
        </div>
      </div>
    </div>
          <?php
          include 'resources/design.php';
          $design = new BlackEdgeStore\Design;
          ?>
      <div class="horizontal-parent">
        <p class="headerKind">CUADRADOS</p>
        <div class="content-cuadrados">
          <div class="grid-content">
            <?php
            $size1 = '1';
            $info_design = $design->mostrarBySize($size1);
            $cantidad = count($info_design);
            $divice = "S/. ";
            $multiplo = 5;
            $c=0;
            if($cantidad > 0){
              for($x =0; $x < $cantidad; $x++){
                $c++;
                $item = $info_design[$x];
                ?>
            <div class="content-product">
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
                <a class="vermas" href="product_detail.php?id=<?php print $item['id']  ?>"> <span>VER MÁS</span></a>
            </div>
         </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="horizontal-parent">
      <p class="headerKind">VERTICAL</p>  
    <div class="content-cuadrados">
        <div class="grid-content">
          <?php
          $size1 = '2';
          $info_design = $design->mostrarBySize($size1);
          $cantidad = count($info_design);
          $divice = "S/. ";
          $multiplo = 5;
          $c=0;
          if($cantidad > 0){
            for($x =0; $x < $cantidad; $x++){
              $c++;
              $item = $info_design[$x];
              ?>
          <div class="content_product">
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
              <a class="vermas" href="product_detail.php?id=<?php print $item['id']  ?>"> <span>VER MÁS</span></a>
            </div>
         </div>

              <?php
            }
          }
          ?>
      </div>
      </div>
      </div>

<?php
  require 'Modulos/footer.php';
  ?>
</main>