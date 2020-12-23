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
                <h1 class="nameProductDetail"><?php print $result['name'] ?></h1>
            <div class="row">
                <div class="col4">
                    <?php
                        $img = 'images/'.$result['img'];
                        if(file_exists($img)){
                    ?>
                        <img class="imgProductDetail" src="<?php print $img; ?>">
                    <?php }else{?>
                        SIN FOTO
                    <?php } ?>
                </div>
                <div class="col4">
                        <p class="descProductDetail">Descripción: <br> <?php print $result['design_desc'] ?></p>
                    <div class="row">
                        <div class="col6">
                        <p class="priceProductDetail"><?php print 'S/.'.$result['precio']?></p>
                        </div>
                        <div class="col6">
                        <a class="btnProductDetail" href="shopping-cart.php">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}else{
    header('Location: productos.php');
}

?>