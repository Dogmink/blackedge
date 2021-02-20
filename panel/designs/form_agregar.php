<?php
session_start();
if ($_SESSION[user_log] != null) {
  $user = $_SESSION[user_log];
  if ($user[admin] == 9) {
  require '../../Modulos/basicPanel.php';
?>
  <main>
      <div class="contenedor">
        <div class="form-panel">
          <div class="login">
            <form method="POST" action="../acciones.php" enctype="multipart/form-data">
              <div class="panel">
                <div class="panel-header">
                  <h3>AGREGAR</h3>
                </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col6">
                          <div class="form-input">
                            <label>Nombre</label>
                            <input class="input-panel" type="text" name="name" required>
                          </div>
                        </div>
                        <div class="col6">
                          <div class="form-input">
                              <label>Categoria</label>
                              <select class="input-panel" name="cat_id" requiered>
                                <option value="">--SELECT--</option>
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
                                    <option class="form-selectcat" value="<?php print $item['id'] ?>"><?php print $item['name_cat'] ?></option>
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
                            <label>Descripción</label>
                            <input class="input-panel" type="text" name="design_desc" required>
                          </div>
                        </div>
                      </div>
                      <div class="separator"></div>
                      <div class="row">
                        <div class="col8">
                          <div class="form-input">
                            <label>Imagen</label>
                            <input class="input-panel" type="file" name="img" required>
                          </div>
                        </div>
                        <div class="col4">
                          <div class="form-input">
                            <label>Precio</label>
                            <input class="input-panel" type="text" name="precio" placeholder="0.00" required>
                          </div>
                        </div>
                      </div>
                      <div class="separator"></div>
                      <div class="row">
                        <div class="col6">
                          <input class="btn-addDesign" name='accion' type="submit" value="AGREGAR">
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
