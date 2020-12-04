<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/normalize.css">
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

      <div class="container">
        <div class="row">
          <div class="col12">
            <div class="pull-right">
              <a href="form_agregar.php" class="btn-agregar">+ Nuevo</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col12">
            <fieldset>
              <legend>Diseños</legend>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th class="text-center">Vista</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      require '../../vendor/autoload.php';
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
                      <td><?php print $c?></td>
                      <td><?php print $item['name']?></td>
                      <td><?php print $item['name_cat']?></td>
                      <td><?php print $item['precio']?></td>
                      <td class="text-center">
                        <?php
                          $img = '../../images/'.$item['img'];
                          if(file_exists($img)){
                        ?>
                          <img src="<?php print $img; ?>" width="60px">
                      <?php }else{?>
                          SIN FOTO
                      <?php }?>
                      </td>
                      <td class="text-center">
                        <a href="../acciones.php?id=<?php print $item['id'] ?>" class="btn btn-danger"><span class="">Eliminar</span></a>
                        <a href="form_actualizar.php?id=<?php print $item['id']  ?>" class="btn btn-success"><span class="">Editar</span></a>
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


</body>
</html>
