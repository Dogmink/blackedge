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
                        $img = 'images/'.$value['img'];
                        if(file_exists($img)){
                      ?>
                        <img src="<?php print $img; ?>" width="90%">
                    <?php }else{?>
                        SIN FOTO
                    <?php }?>
                </div>
                <div class="col6">

                </div>
            </div>
        </div>

        <?php
    }
}else{
    header('Location: productos.php');
}

?>