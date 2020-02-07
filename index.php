<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Sample PHP Verification</title>
  </head>
  <body>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <div class="container">
    <br>
  <h2> Simple CAPTCHA PHP Example </h2>
 <br>

 Captcha Code: <img src="image.php" />

 <br>
<form  method="POST" action="result.php" class="mt-2">
  <div class="form-group" >
    <label for="captcha">Enter the captcha code:</label>
    <input type="text" class="form-control" id="captcha" name="captcha" maxlength="6" required>
  </div>


  <button type="submit" class="btn btn-primary">Check!</button>
</form> 
  
  
  </div>
 <!-- Sample PHP CAPTCHA By Othmane Marzouq -->
  </body>
</html>
<?php
?>