<?php
  namespace BlackEdgeStore;

  class Design
  {
    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini');
        try {
          $this->cn = new \PDO($this->config['dns'], $this->config['user'], $this->config['password'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
          ));
          $this->cn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
          echo $e->getMessage();
        }
    }



// =================DISEÑOS=====================


    public function registrar($_params){
      $sql = "INSERT INTO `design`(`name`, `design_desc`, `img`, `precio`, `cat_id`, size_id)
      VALUES (:name, :design_desc, :img, :precio, :cat_id, :size_id)";

      $result = $this->cn->prepare($sql);

      $_array = array(
        ":name" => $_params['name'],
        ":design_desc" => $_params['design_desc'],
        ":img" => $_params['img'],
        ":precio" => $_params['precio'],
        ":cat_id" => $_params['cat_id'],
        ":size_id" => $_params['size_id']
      );

      if($result->execute($_array))
          return true;

        return false;
    }


    public function actualizar($_params){
      $sql = "UPDATE `design` SET `name`=:name, `design_desc`=:design_desc, `img`=:img, `precio`=:precio, `cat_id`=:cat_id, `size_id`=:size_id WHERE `id`=:id";

      $result = $this->cn->prepare($sql);

      $_array = array(
        ":name" => $_params['name'],
        ":design_desc" => $_params['design_desc'],
        ":img" => $_params['img'],
        ":precio" => $_params['precio'],
        ":cat_id" => $_params['cat_id'],
        ":size_id" => $_params['size_id'],
        ":id" => $_params['id']
      );

      if($result->execute($_array))
          return true;

        return false;
    }

    public function eliminar($id){
      $sql = "DELETE FROM `design` WHERE `id`=:id";
      $result = $this->cn->prepare($sql);

      $_array = array(
        ":id" => $id
      );
      if($result->execute($_array))
        return true;

      return false;
    }

    
//  =============================MOSTRAR========================================


    public function mostrar(){
        $sql = "SELECT design.id, design.name,design_desc,img,name_cat,precio FROM design

        INNER JOIN categorias
        ON design.cat_id = categorias.id ORDER BY design.id DESC";

        $result = $this->cn->prepare($sql);

        if($result->execute())
            return $result->fetchAll();

        return false;
    }

    public function mostrarBySize($size){
      $sql = "SELECT design.id, design.name,design_desc,img,name_cat,precio FROM design
      INNER JOIN categorias
      ON design.cat_id = categorias.id WHERE size_id = :size ORDER BY design.id DESC";

      $result = $this->cn->prepare($sql);
      $_array = array(
        ":size" => $size
      );
      if($result->execute($_array))
          return $result->fetchAll();

      return false;
  }


  public function mostrarByCat($cat){
    $sql = "SELECT design.id, design.name,design_desc,img,name_cat,precio FROM design

    INNER JOIN categorias
    ON design.cat_id = categorias.id WHERE 'design.cat_id' = :cat ORDER BY design.id DESC";

    $result = $this->cn->prepare($sql);
    $_array = array(
      ":cat" -> $cat
    );
    if($result->execute($_array))
        return $result->fetchAll();

    return false;
}

    public function mostrarNewDesign(){
        $sql = "SELECT  design.id, design.name,design_desc,img,name_cat,precio FROM design

        INNER JOIN categorias
        ON design.cat_id = categorias.id ORDER BY design.id DESC LIMIT 3 ";

        $result = $this->cn->prepare($sql);

        if($result->execute())
            return $result->fetchAll();

        return false;
    }

    public function mostrarPorId($id){
      $sql = "SELECT * FROM `design` WHERE `id` = :id";
      $result = $this->cn->prepare($sql);
      $_array = array(
          ":id" => $id
      );
      if($result->execute($_array))
            return $result->fetch();

          return false;
    }


    
    
    // =================categorias====================``
    
    public function newCat($_params){
      $sql = "INSERT INTO 'categorias' ('name_cat') VALUE (:name_cat)";
      $result = $this->cn->prepare($sql);
      $_array = array(
        ":name_cat" -> $_params['categoria']
      );
      if ($result->execute($_array)) {
        return true;
        
        return false;
      }
    }
    
    public function deleteCat($id){
      $sql = "DELETE FROM `categorias` WHERE 'id' = :id";
      $result = $this->cn->prepare($sql);
      $_array = array(
        ":id" -> $id
      );
    }
    
  }
    ?>
