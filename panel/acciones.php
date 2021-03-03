<?php
  session_start();
  if ($_SESSION[user_log] != null) {
    $user = $_SESSION[user_log];
    if ($user[admin] == 9) {
  require '../resources/design.php';
  require '../resources/categorias.php';
  $categoria = new BlackEdgeStore\Categorias;
  $design = new BlackEdgeStore\Design;

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if ($_POST['accion']==='AGREGAR'){
      if(empty($_POST['name']))
        exit('Completar nombre');
      if(empty($_POST['design_desc']))
        exit('Completar descripción');
      if(!is_numeric($_POST['cat_id']))
        exit('El valor es invalido, poner un valor númerico');
      if(empty($_POST['cat_id']))
        exit('Poner una categoria');
      if(!is_numeric($_POST['size_id']))
        exit('El valor es invalido, poner un valor númerico');
      if(empty($_POST['size_id']))
        exit('Poner una tipo');
      if(empty($_POST['precio']))
        exit('Completar precio');

      $_params = array(
        'name'=>$_POST['name'],
        'design_desc'=>$_POST['design_desc'],
        'img'=> uploadImg(),
        'precio'=>$_POST['precio'],
        'cat_id'=>$_POST['cat_id'],
        'size_id'=>$_POST['size_id']
      );

      $rpt = $design->registrar($_params);

      if($rpt)
        header('Location: designs/index.php');
      else
        print 'Error al registrar diseño';
    }



      if ($_POST['accion']==='AGREGARCAT'){
        if(empty($_POST['name_cat']))
          exit('Completar nombre');
  
        $_params = array(
          'name_cat'=>$_POST['name_cat']
        );
  
        $rpt = $categoria->registrar($_params);
  
        if($rpt)
          header('Location: designs/index.php');
        else
          print 'Error al registrar diseño';
      }
  

    if($_POST['accion']==='ACTUALIZAR'){

      if(empty($_POST['name']))
        exit('Completar nombre');
      if(empty($_POST['design_desc']))
        exit('Completar descripción');
      if(!is_numeric($_POST['cat_id']))
        exit('Poner una categoria');
      if(empty($_POST['cat_id']))
        exit('Poner una categoria');
      if(empty($_POST['precio']))
        exit('Completar precio');
      if (!is_numeric($_POST['size_id'])) {
        # code...
      }

      $_params = array(
        'name'=>$_POST['name'],
        'design_desc' => $_POST['design_desc'],
        'precio'=>$_POST['precio'],
        'cat_id'=>$_POST['cat_id'],
        'size_id' =>$_POST['size_id'],
        'id' => $_POST['id']
      );

      if(!empty($_POST['img_temp']))
        $_params['img'] = $_POST['img_temp'];
      if(!empty($_FILES['img']['name']))
        $_params['img'] = uploadImg();

      $rpt = $design->actualizar($_params);

      if($rpt)
        header('Location: designs/index.php');
      else
        print 'Error al registrar diseño';

    }

  }

  if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $id = $_GET['id'];
    $rpt = $design->eliminar($id);

    if($rpt)
      header('Location: designs/index.php');
    else
      print 'Error al eliminar diseño';
  }



    function uploadImg(){
      $carpeta = __DIR__.'/../images/';

      $archivo = $carpeta.$_FILES['img']['name'];

      move_uploaded_file($_FILES['img']['tmp_name'],$archivo);

      return $_FILES['img']['name'];
    }
  }
}

 ?>
