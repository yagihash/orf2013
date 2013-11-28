<?php
session_start();

require_once 'mylogin.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
mysqli_select_db($db_server,$db_database) or die("Unable to select database: " . mysqli_error());
function h($q){
  return str_replace("\n", "<br />",htmlspecialchars($q));
}
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


?>
<!doctype html>

<html>

  <head>
    <meta charset="utf-8" />
    <title>XSS DEMO</title>
    <style>
      body {
        width: 500px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      
      textarea {
        display: block;
        width: 400px;
        height: 60px;
        resize: none;
      }
      
      span.name {
        display: block;
        margin-top: 20px;
      }
      
      hr {
        margin-bottom: 10px;
      }
      
      p.comment {
        margin-bottom: 50px;
      }
      a.menu {
        text-align: left;
      }
    </style>
  </head>

  <body>
  <p class="menu"><a href="./search.php">Search</a>　
<?php 
if($_SESSION["loginid"]){
  echo '<a href="./logout.php">Logout</a>';
}else{
 echo '<a href="./login.php">Login</a>';
}
?>
<br></p>
  <hr>
    <?php
if($_SESSION["loginid"]){

  $db = new DBIO("localhost", "orf", "kaisenpasutadon", "orf");
  $user = $db -> get_user_data($_SESSION["loginid"]);
  echo h($user["name"]);
}
?>
    <form action="post.php" method="POST">
      <textarea name="comment"></textarea>
      <input type="submit" value="post" />
    </form>
    <div id="comments">
<?php


$mytbl = mysqli_query($db_server,"SELECT comments.id,comments.comment,users.name,comments.timeadded  FROM comments LEFT JOIN users ON comments.user_id = users.id ORDER BY id DESC LIMIT 10");

while( ($col = mysqli_fetch_assoc($mytbl)) != null){
    $name_tag = '<span class="name">' . ($col["name"]?h($col["name"]):"ANON") . " said in " . $col["timeadded"] . "...</span>\r\n";
    $hr = "<hr />\r\n";
    $comment_tag = '<p class="comment">' . h($col["comment"]) . "</p>\r\n";
    $time = "";
    echo $name_tag . $hr . $comment_tag;
}

?>
    </div>
  </body>

</html>
