<?php

function stateUser($force = true){
  session_start();
  if(!isset($_SESSION["user_id"]) && !$force){
    return null;
  }

  $user = USER::forId($_SESSION["user_id"]);
  if(!isset($user)){
    illegal_log(1,"UNKNOWN ID set session");
    forceLogout();
    exit();
  }
  return $user;
}

function forceLogout(){
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
  }
  session_destroy();
  header("./login.php?status=1");
}

?>