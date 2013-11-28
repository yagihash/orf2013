<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.gc_maxlifetime', 60 * 60 * 10);
session_start();
if (!isset($_SESSION['user_name'])) {
  header("Location: " . $wd . "login.php");
	}
	$wd = preg_replace("/(\/)[a-zA-Z0-9.]+$/", "$1", $_SERVER['SCRIPT_NAME']);

	if ($_POST) {
	  if (isset($_POST['comment'])) {
		    $comment = str_replace("\n", "<br />", $_POST['comment']);
				    $name_tag = '<span class="name">' . $_SESSION['user_name'] . " says...</span>\r\n";
						    $hr = "<hr />\r\n";
								    $comment_tag = '<p class="comment">' . $comment . "</p>\r\n";

										    $post = $name_tag . $hr . $comment_tag;
												    $data = $post.file_get_contents("comments");
														    $fp = fopen("comments", "w");
																    if ($fp) {
																		      if (flock($fp, LOCK_EX)) {
																					        fwrite($fp, $data);
																									      }
																												      flock($fp, LOCK_UN);
																															      fclose($fp);
																																		    }
																																				  }
																																					}
																																					header("Location:" . $wd);
																																				
