<?php

session_start();
require '../../resources/categorias.php';
if ($_SESSION[user_log] != null) {
  $user = $_SESSION[user_log];
  if ($user[admin] == 9) {
  require '../../Modulos/basicPanel.php';
if(isset($_GET['id'])&& is_numeric($_GET['id'])){

  $id = $_GET['id'];

  $categ = new BlackEdgeStore\Categorias;
  $result = $categ->mostrarPorId($id);



} else {
  header('Location: index.php');
}

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
                                    <input class="input-panel" name="name_cat" type="text" value="<?php echo $result['name_cat'] ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col6">
                                <input class="btn-addDesign" name='accion' type="submit" value="ACTUALIZARCAT">
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
    </div>
</div>

<?php
      require '../../Modulos/footerPanel.php';
  }
}
?>