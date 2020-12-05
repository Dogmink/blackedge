<?php
  require '../../vendor/autoload.php';

  if(isset($_GET['id'])&& is_numeric($_GET['id'])){

    $id = $_GET['id'];

    $design = new BlackEdgeStore\Design;
    $result = $design->mostrarPorId($id);



  } else {
    header('Location: index.php');
  }



 ?>


<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../css/grid.css">
  <link rel="stylesheet" href="../../css/anim.css">
  <link rel="stylesheet" href="../../css/estilos.css">
  <link rel="stylesheet" href="../../css/mobile.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <title>BlackEdge</title>
</head>
<body>
  <nav class="fadeInDown">
    <div class="BlackEdge_image">
      <img class="logo" src="../../images/Logo/LogoL.png" alt="index.html">
    </div>
    </nav>

      <!-- Aquí acaba el nav -->

      <div class="contenedor">
        <div class="form-panel">
          <div class="login">
            <form method="POST" action="../acciones.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php print $result['id'] ?>">
              <div class="panel">
                <div class="panel-header">
                  <h3>AGREGAR</h3>
                </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-input">
                            <label class="label-panel">Nombre</label>
                            <input class="input-panel" type="text" name="name" value="<?php print $result['name'] ?>" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-input">
                              <label class="label-panel">Categoria</label>
                              <select class="form-selectcat" name="cat_id" requiered>
                                <?php
                                require '../../vendor/autoload.php';
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
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-input">
                            <label class="label-panel">Descripción</label>
                            <textarea class="input-panel" type="text" name="design_desc" cols="5" required><?php print $result['design_desc'] ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-input">
                            <label class="label-panel">Imagen</label>
                            <input class="input-panel" type="file" name="img" >
                            <input type="hidden" name="img_temp" value="<?php print $result['img'] ?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-input">
                            <label class="label-panel">Precio</label>
                            <input class="input-panel" type="text" name="precio" value="<?php print $result['precio'] ?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <input class="btn-addDesign" name='accion' type="submit" value="ACTUALIZAR">
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


</body>
</html>
