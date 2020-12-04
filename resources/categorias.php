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

}
