<?php
  require '../../Modulos/basicPanel.php';
?>
<main>
      <div class="container">
        <div class="row">
          <div class="col10">
            <fieldset>
              <legend>Diseños</legend>
              <table class="col12">
                <thead>
                  <tr>
                    <th class="col2">#</th>
                    <th class="col2">Nombre</th>
                    <th class="col2">Categoria</th>
                    <th class="col2">Precio</th>
                    <th class="col2">Vista</th>
                    <th class="col2">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      require '../../resources/design.php';
                      $design = new BlackEdgeStore\Design;
                      $info_designs = $design->mostrar();
                      $cantidad = count($info_designs);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_designs[$x];
                    ?>

                    <tr>
                      <td class="col2"><?php print $c?></td>
                      <td class="col2"><?php print $item['name']?></td>
                      <td class="col2"><?php print $item['name_cat']?></td>
                      <td class="col2"><?php print $item['precio']?></td>
                      <td class="col2">
                        <?php
                          $img = '../../images/'.$item['img'];
                          if(file_exists($img)){
                        ?>
                          <img src="<?php print $img; ?>" width="60px">
                      <?php }else{?>
                          SIN FOTO
                      <?php }?>
                      </td>
                      <td class="col2">
                        <a href="../acciones.php?id=<?php print $item['id'] ?>" class="btn-trash"><span>Eliminar</span></a>
                        <a href="form_actualizar.php?id=<?php print $item['id']  ?>" class="btn-edit"><span>Editar</span></a>
                      </td>

                    </tr>

                    <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>


                  </tbody>
              </table>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div>
              <a href="form_agregar.php" class="btn-agregar">Nuevo</a>
          </div>
        </div>
      </div>
</main>

<?php
  require '../../Modulos/footerPanel.php';
?>
