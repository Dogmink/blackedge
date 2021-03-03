<?php

  function addDesignToCart($result, $id, $cantidad = 1){
    $_SESSION['shopping'][$id] = array(
      'id' => $result['id'],
      'name' => $result['name'],
      'img' => $result['img'],
      'precio' => $result['precio'],
      'design_desc' => $result['design_desc'],
      'cantidad' => $cantidad
    );
  }



  function updateDesign($id,$cantidad = false){
    if($cantidad){
      $_SESSION['shopping'][$id]['cantidad'] = $cantidad;
    }else {
      $_SESSION['shopping'][$id]['cantidad']+=1;
    }
  }


  function totalPrice(){
      $total = 0;
      if (isset($_SESSION['shopping'])) {
        foreach ($_SESSION['shopping'] as $indice => $value) {
          $total += $value['precio'] * $value['cantidad'];
        }
      }

      return $total;
  }

  function cantidadDesign(){
      $cantidad = 0;
      if (isset($_SESSION['shopping'])) {
        foreach ($_SESSION['shopping'] as $indice => $value) {
          $cantidad++;
        }
      }
      return $cantidad;
  }

  
 ?>
