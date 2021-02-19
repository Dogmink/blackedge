<?php
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
                        <div class="col-md-6">
                          <div class="form-input">
                            <label class="label-panel">Nombre</label>
                            <input class="input-panel" type="text" name="name" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-input">
                              <label class="label-panel">Categoria</label>
                              <select class="form-selectcat" name="cat_id" requiered>
                                <option class="form-selectcat" value="">--SELECT--</option>
                                <?php
                                require '../../resources/design.php';
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
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-input">
                            <label class="label-panel">Descripción</label>
                            <input class="input-panel" type="text" name="design_desc" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-input">
                            <label class="label-panel">Imagen</label>
                            <input class="input-panel" type="file" name="img" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-input">
                            <label class="label-panel">Precio</label>
                            <input class="input-panel" type="text" name="precio" placeholder="0.00" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <input class="btn-addDesign" name='accion' type="submit" value="AGREGAR">
                        </div>
                        <div class="col-md-12">
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
      ?>
