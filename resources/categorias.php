<?php
  namespace BlackEdgeStore;

  class Categorias {
    private $config;
    private $cn = null;

    public function __construct(){

      $this->config = parse_ini_file(__DIR__.'/../config.ini');

      $this->cn = new \PDO($this->config['dns'], $this->config['user'], $this->config['password'],array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
      ));
  }
  public function mostrar(){
      $sql = "SELECT * FROM categorias";

      $result = $this->cn->prepare($sql);

      if($result->execute())
          return $result->fetchAll();

      return false;
  }

  public function registrar($_params){
    $sql = "INSERT INTO `categorias`(`name_cat`)
    VALUES (:name_cat)";

    $result = $this->cn->prepare($sql);

    $_array = array(
      ":name_cat" => $_params['name_cat']
    );

    if($result->execute($_array))
        return true;
  }

  public function eliminar($id){
    $sql = "DELETE FROM `categorias` WHERE `id`=:id";
    $result = $this->cn->prepare($sql);

    $_array = array(
      ":id" => $id
    );
    if($result->execute($_array))
      return true;

    return false;
  }

  public function mostrarPorId($id){
    $sql = "SELECT * FROM `categorias` WHERE `id` = :id";
    $result = $this->cn->prepare($sql);
    $_array = array(
        ":id" => $id
    );
    if($result->execute($_array))
          return $result->fetch();

        return false;
  }

}
