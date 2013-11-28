<?php


class User {

  #id,loginid,password,usertype
  private $data;
  private $dp;
  
  private function __construct($q){
    $this->dp = DBConnection::getInstance();
    $this->data = $q;
    $this->data["password"] = null;
  }
  
  public function get($q){
    return $this->data[$q];
  }

  public function changePassword ($pw){
    $t_hasher = new PasswordHash(4, FALSE);
    #$this->data["password"] = $t_hasher->HashPassword($pw);
    try {    
      $dp->q("UPDATE users SET password = ? WHERE id=?",$this->data["password"],$this->data["id"]);
      return true;
    } catch(Exception $e){
      return false;
    }
  }

  public static function make($loginid,$password,$name,$usertype = 0){
    if(strlen($loginid) > 20 || strlen($loginid) < 4){
      $error[] = "IDは4文字以上20文字以内にしてください。";
    }
    if( preg_match("/[\W]/",$loginid === false)){
      $error[] = "IDに使用出来ない文字が含まれています。[_a-zA-Z0-9]";
    }
    if(strlen($password) < 4){
      $error[] = "パスワードは4文字以上にしてください。";
    }
    if(strlen($name) > 20 || strlen($name) == 0){
      $error[] = "IDは1文字以上20文字以内にしてください。";
    }
    if(count($error) == 0 && User::forloginid($_POST["loginid"]) != null ){
      $error[] = "そのIDは既に使われています。";
    }

    if(count($error) > 0){return $error;}

    $dbp = DBConnection::getInstance();
    $t_hasher = new PasswordHash(4, FALSE);
    try {
      $dbp->q("INSERT INTO users(loginid, password, name, usertype) VALUES(?,?,?,?)",$loginid,$t_hasher->HashPassword($password),$name,$usertype);
      return true;
    } catch (Exception $e){
      return array($e->message);
    }
  }

  public static function login($loginid,$password) {
    $i=0;
    $dbp = DBConnection::getInstance();
    try {
      $dbr = $dbp->q("SELECT * FROM users WHERE loginid = ?",$loginid);
      if ($dbr["id"] == null) return null;
      $user = new User($dbr);
      if($user->checkPassword($password)){
        $user->updateLog();
        return $user;
      } else {
        return null;
      }
    } catch (Exception $e) {
      return null;
    }
  }

  public function checkPassword($password){
    $t_hasher = new PasswordHash(4, FALSE);
    return $t_hasher->CheckPassword($password,$this->data["password"]);
  }

  public static function all($supers = false){
    $dbp = DBConnection::getInstance();
    $dbr = array();
    $ret = array();
    if($supers){
      $dbr = $dbp->qa("SELECT * FROM users WHERE usertype = 0");
    } else {
      $dbr = $dbp->qa("SELECT * FROM users WHERE usertype = 0");
    }
    
    for($i=0;$i<count($dbr);++$i){
      $ret = new User($dbr[$i]);
    }
    return $ret;
  }
  
  public static function forId($id){
    $dbp = DBConnection::getInstance();
    $dbr = $dbp->q("SELECT * FROM users WHERE id = ?",$id);
    $ret = new User($dbr);
    if( $ret->get("id") == null){
      return null;
    } else {
      return $ret;
    }
  }

  public static function forLoginId($loginid){
    $dbp = DBConnection::getInstance();
    $dbr = $dbp->q("SELECT * FROM users WHERE loginid = ?",$loginid);

    $ret = new User($dbr);
    if( $ret->get("id") == null){
      return null;
    } else {
      return $ret;
    }
  }
}

