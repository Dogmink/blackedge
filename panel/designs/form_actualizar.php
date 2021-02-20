<?php
  require '../../resources/design.php';
  if ($_SESSION[user_log] != null) {
    $user = $_SESSION[user_log];
    if ($user[admin] == 9) {
    require '../../Modulos/basicPanel.php';
  if(isset($_GET['id'])&& is_numeric($_GET['id'])){

    $id = $_GET['id'];

    $design = new BlackEdgeStore\Design;
    $result = $design->mostrarPorId($id);



  } else {
    header('Location: index.php');
  }
  

 ?>
    <main>
      <div class="contenedor">
        <div class="form-panel">
          <div class="login">
            <form method="POST" action="../acciones.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php print $result['id'] ?>">
              <div class="panel">
                <div class="panel-header">
                  <h3>ACTUALIZAR</h3>
                </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col6">
                          <div class="form-input">
                            <label>Nombre</label>
                            <input class="input-panel" type="text" name="name" value="<?php print $result['name'] ?>" required>
                          </div>
                        </div>
                        <div class="col6">
                          <div class="form-input">
                              <label class="label-panel">Categoria</label>
                              <select class="input-panel" name="cat_id" requiered>
                                <?php
                                require '../../resources/categorias.php';
                                $categ = new BlackEdgeStore\Categorias;
                                $info_cat = $categ->mostrar();
                                $cantidad = count($info_cat);
                                if($cantidad > 0){
                                  $c=0;
                                for($x =0; $x < $cantidad; $x++){
                                  $c++;
                                  $item = $info_cat[$x];
                                  ?>
                                    <option class="form-selectcat" value="<?php print $item['id'] ?>"
                                      <?php print $result['cat_id']== $item['id'] ?'selected':''?> ><?php print $item['name_cat'] ?></option>
                                  <?php
                                    }
                                  }
                                  ?>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="separator"></div>
                      <div class="row">
                        <div class="col12">
                          <div class="form-input">
                            <label class="label-panel">Descripción</label>
                            <textarea class="input-panel" type="text" name="design_desc" cols="5" required><?php print $result['design_desc'] ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="separator"></div>
                      <div class="row">
                        <div class="col8">
                          <div class="form-input">
                            <label class="label-panel">Imagen</label>
                            <input class="input-panel" type="file" name="img" >
                            <input type="hidden" name="img_temp" value="<?php print $result['img'] ?>">
                          </div>
                        </div>
                        <div class="col4">
                          <div class="form-input">
                            <label class="label-panel">Precio</label>
                            <input class="input-panel" type="text" name="precio" value="<?php print $result['precio'] ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="separator"></div>
                      <div class="row">
                        <div class="col6">
                          <input class="btn-addDesign" name='accion' type="submit" value="ACTUALIZAR">
                        </div>
                        <div class="col6">
                          <button class="btn-addDesign" type="button" name="button" onclick="location.href='../designs'">CANCELAR</button>
                        </div>
                      </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
  require '../../Modulos/footerPanel.php';
  }
}
  ?>
