<?php
require_once 'mylogin.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);

if(!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
mysqli_select_db($db_server,$db_database) or die("Unable to select database: " . mysqli_error());

$query = "INSERT INTO users VALUES('hoge','hogehoge','hoge')";

$result = mysqli_query($db_server,$query);

?>
