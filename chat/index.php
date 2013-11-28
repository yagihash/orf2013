<?php
session_start();

if (!isset($_SESSION['user_name'])) {
  header("Location: " . $wd . "login.php");
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
																																																																																																		    </style>
																																																																																																				  </head>

																																																																																																					  <body>
																																																																																																						    Hello, <?php echo $_SESSION['user_name']; ?><br />
																																																																																																								    <form action="post.php" method="POST">
																																																																																																										      <textarea name="comment"></textarea>
																																																																																																													      <input type="submit" value="post" />
																																																																																																																    </form>
																																																																																																																		    <div id="comments">
																																																																																																																				<?php echo file_get_contents("comments"); ?>
																																																																																																																				    </div>
																																																																																																																						  </body>

																																																																																																																							</html>
