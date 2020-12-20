
<?php
require 'Modulos/basic.php';

  if (!isset($_SESSION['user_log'])) {
    ?>
    <script>
    {
      alert("Inicia sesión para añadir productos al carrito.");
      window.location= 'register.php';
    }
    </script>
    <?php
  }

  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    include 'resources/design.php';
    $design = new BlackEdgeStore\Design;
    $result = $design->mostrarPorId($id);



    if(!$result)
      header('Location: productos.php');

    if(isset($_SESSION['shopping'])){
      if(array_key_exists($id, $_SESSION['shopping'])){
        updateDesign($id);
      }else{
        addDesignToCart($result, $id);
      }
    }else{
      addDesignToCart($result, $id);
    }

  }

 ?>
<div class="contenido fadeInUp">
  <div class="row">
    <div class="col12">
      <fieldset>
      <legend >Carrito</legend>
        <table class="table-shop">
          <thead>
            <tr>
              <th class="col1">#</th>
              <th class="col1">Nombre</th>
              <th class="col2">Vista</th>
              <th class="col1">Precio</th>
              <th class="col4">Descripcion</th>
              <th class="col1">Cantidad</th>
              <th class="col2">Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              <?php
                if(isset($_SESSION['shopping']) && !empty($_SESSION['shopping'])){
                  $c=0;
                  foreach ($_SESSION['shopping'] as $indice => $value) {
                          $c++;
                          $total = $value['precio'] * $value['cantidad'];

               ?>
                  <tr>
                    <form action="update_shopping_cart.php" method="post">
                    <td class="col1"><?php print $c ?></td>
                    <td class="col1"><?php print $value['name'] ?></td>
                    <td class="text-center col2">
                      <?php
                        $img = 'images/'.$value['img'];
                        if(file_exists($img)){
                      ?>
                        <img src="<?php print $img; ?>" width="60px">
                    <?php }else{?>
                        SIN FOTO
                    <?php }?>
                    </td>
                    <td class="col1"><?php print $value['precio'] ?></td>
                    <td class="col4"><?php print $value['design_desc'] ?></td>
                    <td class="col1">
                      <input type="hidden" name="id" value="<?php print $value['id'] ?>">
                      <input type="text" name="cantidad" class="form-control u-size-100" value="<?php print $value['cantidad'] ?>">
                    </td>
                    <td class="col2">
                      <?php print $divice; print $total ?>
                    </td>
                    <td>
                      <a class="btn-remove-shopping" href="remove-shopping.php?id=<?php print $value['id'] ?>">Eliminar</a>
                    </td>
                  </form>
                  </tr>

               <?php
             }
             }else {

               ?>
                  <tr>
                    <td colspan="7">No hay productos en el carrito</td>
                  </tr>
                  <?php
                }
                ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="6">Total</td>
              <td colspan="1"><?php print $divice; print totalPrice(); ?></td>
            </tr>
          </tfoot>
        </table>
      </fieldset>
      </div>
    </div>
    <?php
    if (isset($_SESSION['shopping']) && !empty($_SESSION['shopping'])) {
      ?>
      <div class="row">
        <div class="col6">
          <a href="productos.php" class="btn-remove-shopping"><h3>Seguir comprando</h3></a>
        </div>
        <div class="col6">
          <a href="#" class="btn-remove-shopping"><h3>Finalizar la compra</h3></a>
        </div>
      </div>
      <?php
    }
    ?>

  <?php
  require 'Modulos/footer.php';
   ?>
 </div>
