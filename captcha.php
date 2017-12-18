<?php
session_start();
unset($_SESSION["code"]);
/*
48-57 0 - 9
65-90 A-Z
97-122 a-z

*/
$length = mt_rand(5,8);
$down = 0;
$up = 9;
$i = 0;
$password = "";

while($i<$length)
{
    $character = mt_rand($down,$up);
    $password .= $character;

    $i++;
}

$_SESSION["code"] = $password;

header("Content-type: image/png");
$im   = imagecreatefrompng("captcha.png") or die("Cannot Initialize new GD image stream");

$rand = mt_rand(0, 9);
if($rand < 3)
    $text_color = imagecolorallocate($im, 255, 0, 0);
else if($rand >=3 && $rand <6)
    $text_color = imagecolorallocate($im, 0, 255, 0);
else if($rand >=6 && $rand <=9)
    $text_color = imagecolorallocate($im, 0, 255, 255);

imagettftext($im, 11, 0, 5, 20, $text_color, "arial.ttf", $password);

imagepng($im);
imagedestroy($im);
unset($password);
?>