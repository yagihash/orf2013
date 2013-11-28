<?php

session_start();
require_once 'mylogin.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
mysqli_select_db($db_server,$db_database) or die("Unable to select database: " . mysqli_error());

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
      p.search {
        text-align:rigth;
      }
    </style>
  </head>

  <body>
  <p class="menu"><a href="./index.php">TOP</a>　
<?php 
if($_SESSION["loginid"]){
  echo '<a href="./logout.php">Logout</a>';
}else{
 echo '<a href="./login.php">Login</a>';
}
?>
<br></p>

    <form action="search.php" method="GET">
      <input type="text" size="30" name="q">
      <input type="submit" value="search" />
    </form>
    
    
    <div id="comments">
    
<?php

function h($q){
  return str_replace("\n", "<br />",htmlspecialchars($q));
}

if($_GET["q"] !== null){

  echo '<p id="search">'. $_GET["q"].'を検索……</p>';
  $stmt = mysqli_stmt_init($db_server);
  mysqli_stmt_prepare($stmt, "SELECT comments.id,comments.comment,users.name,comments.timeadded  FROM comments LEFT JOIN users ON comments.user_id = users.id WHERE comments.comment LIKE ? ORDER BY comments.id DESC");
  $param = "%".$_GET["q"]."%";
  mysqli_stmt_bind_param($stmt, 's',$param);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt,$id,$comment,$uname,$timeadded);
  while(mysqli_stmt_fetch($stmt)){
    $name_tag = '<span class="name">' . ($uname?h($uname):"ANON") . " said in " . $timeadded . " says...</span>\r\n";
    $hr = "<hr />\r\n";
    $comment_tag = '<p class="comment">' . h($comment) . "</p>\r\n";
    echo $name_tag . $hr . $comment_tag;
  }
}
?>
    </div>
  </body>

</html>
