<?php

class DBConnection {

  private $dbh;
  private static $instance = null;

  private function __construct() {
    $this->dbh = new PDO(SETTINGS::DB_SN, SETTINGS::DB_USER, SETTINGS::DB_PASS);
    if ($this->dbh == null){
        die("Error");
    }
  }

  public static function getInstance(){
    if(DBConnection::$instance == null){
      DBConnection::$instance = new DBConnection();
    }
    return DBConnection::$instance;
  }

  public function qa(){
    $args = func_get_args();
    $prepared = $this->dbh->prepare(array_shift($args));
    $prepared->execute($args);
    return $prepared->fetchAll();
  }

  public function q(){
    $args = func_get_args();
    $prepared = $this->dbh->prepare(array_shift($args));
    $prepared->execute($args);
    return $prepared->fetch();
  }
  
  public function makeGetID(){
    $this->dbh->beginTransaction();
      $args = func_get_args();
      $prepared = $this->dbh->prepare(array_shift($args));
      $prepared->execute($args);
      $id = $this->dbh->lastInsertId();
    $this->dbh->commit();
    return $id;
  }

  public function update(){
    $this->dbh->beginTransaction();
      $args = func_get_args();
      $prepared = $this->dbh->prepare(array_shift($args));
      $prepared->execute($args);
    $this->dbh->commit();
    return $prepared->fetch();
  }

  function __destruct() {
    $dbh = null;
  }
}

?>
