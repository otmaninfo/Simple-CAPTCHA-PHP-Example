<?php
session_start();
header("Content-Type: image/jpeg");

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
$code = substr(str_shuffle($chars),0,6);
$_SESSION["code"] = $code;

 $image = @imagecreate(80, 40) or die("Cannot Generate the captcha image!");
 $wihte = imagecolorallocate($image, 255, 255, 255);
 $black = imagecolorallocate($image, 0, 0, 0);
 imagestring($image, 5, 5, 5, $code, $black);


imagejpeg($image); 
imagedestroy($image);

?>