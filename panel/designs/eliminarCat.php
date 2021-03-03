<?php

    require '../resources/categorias.php';
    $categoria = new BlackEdgeStore\Categorias;


  if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $id = $_GET['id'];
    $rpt = $categoria->eliminar($id);

    if($rpt)
      header('Location: designs/index.php');
    else
      print 'Error al eliminar diseño';
  }
?>