<?php
require 'Modulos/basic.php';
include 'resources/design.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $design = new BlackEdgeStore\Design;
    $result = $design->mostrarPorId($id);
    if (!$result) {
        header('Location: productos.php');    
    }else {
        ?>

        <div class="contenido">
            <div class="row">
                <div class="col6">
                    <?php
                        $img = 'images/'.$result['img'];
                        if(file_exists($img)){
                    ?>
                        <img src="<?php print $img; ?>" width="70%">
                    <?php }else{?>
                        SIN FOTO
                    <?php } ?>
                </div>
                <div class="col6">
                    <h1 class="nameProductDetail"><?php print $result['name'] ?></h1>
                    <p class="descProductDetail"><?php print $result['design_desc'] ?></p>
                    <p class="priceProductDetail"><?php print 'S/.'.$result['precio']?></p>
                    <a class="btnProductDetail" href="shopping-cart.php">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <?php
    }
}else{
    header('Location: productos.php');
}

?>