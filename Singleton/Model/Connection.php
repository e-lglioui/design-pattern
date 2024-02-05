<?php

class Connection{
  private static $instance = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'pattern';

  private function __construct(){
    $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  }

  public static function cretinsobjet(){
    if(self::$instance == null){
        self::$instance=new Connection();
    }
    return self::$instance;
}
public function getConnection()
{
  return $this->conn;
}
}
//
// $instance = Connection::getInstance();
// $conn = $instance->getConnection();
// var_dump($conn);

// $instance = Connection::getInstance();
// $conn = $instance->getConnection();
// var_dump($conn);

// $instance = Connection::getInstance();
// $conn = $instance->getConnection();
// var_dump($conn);