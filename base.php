<?php

require_once dirname(__FILE__) . "/setting.php";
require_once dirname(__FILE__) . "/class/db.php";

require_once dirname(__FILE__) . "/lib/passwordhash.php";
require_once dirname(__FILE__) . "/lib/state.php";

// ERROR

function illegal_log($type,$text=""){
  $dp = DBConnection::getInstance();
  if(!$dp->makeGetID("INSERT INTO log(type,ip,file,text) VALUES (?,?,?,?)",$type,$_SERVER["REMOTE_ADDR"],__FILE__,$text)){
    throw new Exception("ILLEGAL_ERROR cant write log");
  }
}

// HEADER FOOTER

function printHeader($user,$name=""){

$title = htmlspecialchars(SETTINGS::TITLE) . "-". $name;

echo <<<EOM
<!doctype html>
<html>
  <head>
    <title>{$title}</title>
    <script type="text/javascript" src="./js/jquery.js"></script>
  </head>
  <body>
EOM;

}

function printFooter(){
echo <<<EOM
  </body>
</html>
EOM;
}



?>
