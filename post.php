<?php
class DBIO {
  protected $link;

  public function __construct($host, $user, $pass, $db) {
    $this -> link = new mysqli($host, $user, $pass, $db);
    if ($this -> link -> connect_error) {
      return false;
    }
    $this -> link -> set_charset("utf8");
  }

  public function __destruct() {
    $this -> link -> close();
  }

  public function post_comment($userid, $comment) {
    $stmt = $this -> link -> prepare("INSERT INTO comments(user_id, comment) VALUES(?, ?)");
    $stmt -> bind_param("ss", $userid, $comment);
    $stmt -> execute();
    $stmt -> close();
  }

  public function get_user_data($loginid) {
    $stmt = $this -> link -> prepare("SELECT id, name FROM users WHERE loginid=?");
    $stmt -> bind_param("s", $loginid);
    $stmt -> execute();
    $stmt -> bind_result($userid, $name);
    $stmt -> fetch();
    $stmt -> close();
    return array("userid" => $userid, "loginid" => $loginid, "name" => $name);
  }

}

session_start();

$db = new DBIO("localhost", "orf", "kaisenpasutadon", "orf");

if (isset($_SESSION["loginid"]))
  $user = $db -> get_user_data($_SESSION["loginid"]);
else
  $user = array("userid" => 0, "loginid" => "Anonymous");

if (isset($_POST["comment"]) and !is_array($_POST["comment"])) {
  $comment = $_POST["comment"];
  $db -> post_comment($user["userid"], $comment);
}

header("Location: /");
