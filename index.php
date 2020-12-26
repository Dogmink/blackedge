

<?php
require 'Modulos/basic.php'
?>

<div class="main_section fadeIn">
  <div id="bg_button">IMPÓN <b>ESTILO</b> A TUS AMBIENTES.
  </div>
</div>
<div class="contenido_index fadeInUp">

<?php

include 'resources/design.php';
$design = new BlackEdgeStore\Design;
$info_design = $design->mostrarNewDesign();
$cantidad = count($info_design);
$rightcontent = false;
if($cantidad > 0){
  $c=0;
  for($x =0; $x < $cantidad; $x++){
    $c++;
    $item = $info_design[$x];
    if($rightcontent == false){
    ?>
<div class="row-index">
  <div class="col3">
    <?php
      $img = 'images/'.$item['img'];
      if(file_exists($img)){
    ?>
      <img class="design_product" src="<?php print $img; ?>" width="60px">
  <?php }else{?>
      SIN FOTO
  <?php }?>
  </div>
  <div class="col9">
    <div class="desc-product">
      <h1><?php print $item['name'] ?></h1>
      <p><?php print $item['design_desc'] ?></p>
      <a href="product_detail.php?= <?php print $item['id'] ?> ">Ver más</a>
      <p class="p_cat"><?php print $item['name_cat'] ?></p>

    </div>
  </div>
</div>
<?php
$rightcontent = true;
}else if ($rightcontent == true) {

?>
<div class="row-index">
  <div class="col9">
    <div class="desc-product2">
      <h1><?php print $item['name'] ?></h1>
      <p><?php print $item['design_desc'] ?></p>
      <a href="product_detail.php?= <?php print $item['id'] ?> ">Ver más</a>
      <p class="p_cat"><?php print $item['name_cat'] ?></p>
    </div>
  </div>
  <div class="col3">
    <?php
    $img = 'images/'.$item['img'];
    if(file_exists($img)){
      ?>
      <img class="design_product" src="<?php print $img; ?>">
    <?php }else{?>
      SIN FOTO
    <?php }?>
  </div>
</div>
<?php
$rightcontent= false;
}
}
}

?>

<?php
require 'Modulos/footer.php'
?>

</div>
