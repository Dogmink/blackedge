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
 $info_design = $design->mostrar();
 $cantidad = count($info_design);
 $divice = "S/. ";
 $multiplo = 5;
 $c=0;
 if($cantidad > 0){
   for($x =0; $x < $cantidad; $x++){
     $c++;
     $item = $info_design[$x];


        col($item, $info_design, $divice, $c, $cantidad, $multiplo);

      ?>
    <?php
  }
}
?>
  </div>

</main>
<?php
  require 'Modulos/footer.php';
 ?>