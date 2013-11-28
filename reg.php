<?php
session_start();
require_once 'mylogin.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
mysqli_select_db($db_server,$db_database) or die("Unable to select database: " . mysqli_error());
function h($q){
  return str_replace("\n", "<br />",htmlspecialchars($q));
}

if($_POST){
  $stmt = mysqli_stmt_init($db_server);
  mysqli_stmt_prepare($stmt, "SELECT loginid from users WHERE loginid = ?");
  mysqli_stmt_bind_param($stmt, 's',$_POST["loginid"]);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt,$exs);

      $loginid=$_POST["loginid"];
      $password=$_POST["pass"];
      $name=$_POST["name"];

    if(strlen($loginid) > 20 || strlen($loginid) < 4){
      $error[] = "IDは4文字以上20文字以内にしてください。";
    }
    if( preg_match("/[\W]/",$loginid) === false){
      $error[] = "IDに使用出来ない文字が含まれています。[_a-zA-Z0-9]";
    }
    if(strlen($password) < 4){
      $error[] = "パスワードは4文字以上にしてください。";
    }
    if(strlen($name) > 20 || strlen($name) == 0){
      $error[] = "名前は1文字以上20文字以内にしてください。";
    }
    if(mysqli_stmt_fetch($stmt)){
      $error[] = "そのIDは既に使われています。";
    }
    mysqli_stmt_close($stmt);
    if(count($error) == 0){
      $stmt = mysqli_stmt_init($db_server);
      mysqli_stmt_prepare($stmt,"INSERT INTO users(loginid,password,name) VALUE(?,?,?)");
      $password=hash("sha256",$password);
      mysqli_stmt_bind_param($stmt, 'sss',$loginid,$password,$name);
      mysqli_stmt_execute($stmt);
      header("Location: ./login.php");
      exit();
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
  <p class="menu"><a href="./search.php">Search</a>　<a href="./login.php">Login</a><br>
  <hr>
    <?php
    if(count($error) > 0){
      echo "<p>";
      for($i=0;$i<count($error);++$i){
        echo "{$error[$i]}<br>\n";
      }
      echo "</p>";
    }
    
    ?>
    <form method="POST">
      Login ID:<input type="text" name="loginid" value="<?php echo h($_POST["loginid"]);?>" size="20"><br />
      PASSWORD :<input type="password" name="pass" value="<?php echo h($_POST["pass"]);?>" size="20"><br />
      NAME:<input type="text" name="name" value="<?php echo h($_POST["name"]);?>" size="20"><br />
      <input type="submit" value="Create" />
    </form>
    <div id="comments">
    </div>
  </body>

</html>
