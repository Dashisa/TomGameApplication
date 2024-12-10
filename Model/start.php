<?php
// Start a PHP session
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Start</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/Styles/start.css">
   
    <style>
		body {
    background-image: url("../View/Images/img.png");
	background-size: cover;
	background-position: center;
    background-repeat: no-repeat; 
    height: 100vh;
    margin: 0;
	/* color: white; */
}
	</style>
  </head>
  <body>
    
  

    <div class="container">
 
      <div class="button" onclick="window.location.href='easylevel.php'">
        <a href="">EASY</a>
      </div>
      
      <div class="button" onclick="window.location.href='mediumlevel.php'">
        <a href="#">MEDIUM</a>
      </div>
      <div class="button" onclick="window.location.href='hardlevel.php'">
        <a href="#">HARD</a>
      </div>
      <div class="button" onclick="window.location.href='display.php'">
        <a href="#">EXIT</a>
      </div>
    </div>
  </body>
</html>