<?php
session_start();
if ($_SESSION[user_log] != null) {
  $user = $_SESSION[user_log];
  if ($user[admin] == 9) {
  require '../../Modulos/basicPanel.php';
?>


<div class="contenedor">
    <div class="form-panel">
        <div class="login">
            <form method="POST" action="../acciones.php" enctype="multipart/form-data">
                <div class="panel">
                    <div class="panel-header">
                        <p class="">Añadir Categoria</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col12">
                                <div class="form-input">
                                    <label>Nombre de la categoria</label>
                                    <input class="input-panel" name="name_cat" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col6">
                                <input class="btn-addDesign" name='accion' type="submit" value="AGREGARCAT">
                            </div>
                            <div class="col6">
                                <button class="btn-addDesign" type="button" name="button"
                                    onclick="location.href='../designs'">CANCELAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col10">
                <fieldset>
                    <legend>Categorias</legend>
                    <table class="col12">
                        <thead>
                            <tr>
                                <th class="col2">#</th>
                                <th class="col2">Nombre</th>
                                <th class="col2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      require '../../resources/categorias.php';
                      $categ = new BlackEdgeStore\Categorias;
                      $info_categ = $categ->mostrar();
                      $cantidad = count($info_categ);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_categ[$x];
                    ?>

                            <tr>
                                <td class="col2"><?php print $c?></td>
                                <td class="col6"><?php print $item['name_cat']?></td>
                                <td class="col2">
                                    <a href="eliminarCat.php?id=<?php print $item['id'] ?>"
                                        class="btn-trash"><span>Eliminar</span></a>
                                    <a href="actualizarCat.php?id=<?php print $item['id']  ?>"
                                        class="btn-edit"><span>Editar</span></a>
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
    </div>
</div>


<?php
    require '../../Modulos/footerPanel.php';
      }
    }
  ?>