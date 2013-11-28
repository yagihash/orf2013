

<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.gc_maxlifetime', 60 * 60 * 10);
session_start();

$wd = preg_replace("/(\/)[a-zA-Z0-9.]+$/", "$1", $_SERVER['SCRIPT_NAME']);
$msg = "";
if ($_POST) {
  if (isset($_POST['name']) && isset($_POST['password'])) {
	    $name = $_POST['name'];
			    $password = $_POST['password'];
					    $passlist = file_get_contents("../pass/password.txt");
							    $passlist = explode("\n", $passlist);
									    $hash = array();
											    for($i = 0; $i < sizeof($passlist); $i++) {
													      $line = explode(":", $passlist[$i]);
																      $hash[$line[0]] = $line[1];
																			    }
																					    
																							    if (md5($password) == $hash[$name]) {
																									      $_SESSION['user_name'] = $name;
																												      header("Location: " . $wd);
																															    }
																																	  }
																																		}

																																		function h($str) {
																																		  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
																																																																																					        width: 200px;
																																																																																									        height: 200px;
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
																																																																																																																																						          Login Name
																																																																																																																																											          <br />
																																																																																																																																																          <input type="text" name="name" value="<?php echo h($name); ?>" />
																																																																																																																																																					          <br />
																																																																																																																																																										          Password
																																																																																																																																																															          <br />
																																																																																																																																																																				          <input type="password" name="password" />
																																																																																																																																																																									          <br />
																																																																																																																																																																														          <input type="submit" value="Login" />
																																																																																																																																																																																			        </form>
																																																																																																																																																																																							      </div>
																																																																																																																																																																																										    </div>
																																																																																																																																																																																												  </body>
																																																																																																																																																																																													</html>
