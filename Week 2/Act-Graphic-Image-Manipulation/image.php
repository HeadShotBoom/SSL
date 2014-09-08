<?php
$im=imagecreatefrompng('burris.png');
header('Content-Type: image/png');
$black = imagecolorallocate($im, 255, 255, 255);
$font = "Mutlu__Ornamental.ttf";
$message = "Hello World!";
imagefttext($im, 32, 0, 100, 70, $black, $font, $message);
imagepng($im, null, 0);
imagedestroy($im);
?>

<!--This is the image resized to 50%-->
<?php
//$im=imagecreatefrompng('burris.png');
//$smaller = imagecreatetruecolor(584, 390);
//imagecopyresampled($smaller, $im, 0, 0, 0, 0, 584, 390, 1168, 779);
//header('Content-Type: image/png');
//$black = imagecolorallocate($smaller, 255, 255, 255);
//$font = "Mutlu__Ornamental.ttf";
//$message = "Hello World!";
//imagefttext($smaller, 32, 0, 100, 70, $black, $font, $message);
//imagepng($smaller, null, 0);
//imagedestroy($im);
//imagedestroy($smaller);
//?>