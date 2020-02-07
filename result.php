<?php
session_start();
if (isset($_POST['captcha'])){
	$captcha = $_POST['captcha'];
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Sample PHP CAPTCHA</title>
  </head>
  <body>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <div class="container">
    <br>
  <h2> Simple CAPTCHA PHP Example </h2>
  <br>
<?php

if($captcha == $_SESSION["code"]){
?>	
<div class="alert alert-success" role="alert" align="center">
  <b> Captcha has been verified successfully! </b>
</div>
 <?php 
	session_destroy();
	
}else{
?>	
<div class="alert alert-danger" role="alert" align="center">
     <b> Error Invalid Captcha Code!  </b>
</div>
 <?php 	
	session_destroy();
}

?>
  
  
  </div>
 <!-- Sample PHP CAPTCHA By Othmane Marzouq -->
  </body>
</html>
