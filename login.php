<?php
session_start();
require_once 'mylogin.php';

$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$db_server)
  die("Unable to connect to MySQL: " . mysqli_error());
mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());

$wd = preg_replace("/(\/)[a-zA-Z0-9.]+$/", "$1", $_SERVER['SCRIPT_NAME']);
if (isset($_POST['loginid']) and isset($_POST['password'])) {
  $_SESSION['loginid'] = $_POST['loginid'];

  $hash = hash("sha256", $_POST['password']);
  $login = mysqli_real_escape_string($db_server, $_POST['loginid']);

  $mytbl = mysqli_query($db_server, "SELECT * FROM users WHERE loginid='$login' AND password='$hash'");

  $data = mysqli_fetch_assoc($mytbl);

  if (!$data) {
    echo "Unable to login";
  } else {
    if ($login == $data['loginid'] && $hash == $data['password']) {
      $_SESSION['loginid'] = $login;
      session_regenerate_id(true);
      header("Location: " . $wd);
    }
  }

}
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>XSS DEMO</title>
    <style>
      form {
        position: fixed;
        top: 50%;
        left: 50%;
        -webkit-transform-origin: 100% 100%;
        -moz-transform-origin: 100% 100%;
        transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        text-align: center;
        display: block;
        width: 240px;
        height: 240px;
        border: double 1px #FFF;
        border-radius: 10px;
        background-color: #FAFAFA;
        box-shadow: 0 0 10px 10px #DFDFDF;
        padding: 30px;
      }
    </style>
  </head>

  <body class="login">
    <div id="wrap_login">
      <div id="form_box">
        <form method="POST">
          <h1>XSS DEMO</h1>
          LoginId
          <br />
          <input type="text" name="loginid"  />
          <br />
          Password
          <br />
          <input type="password" name="password" />
          <br />
          <input type="submit" value="Login" />
					<br /><br />
					<a href="./reg.php">Sign up</a> 
        </form>
      </div>
    </div>
  </body>
</html>

