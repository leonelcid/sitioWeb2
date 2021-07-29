<?php
session_start();
header("Content-type: image/jpeg");
// Creamos la imágen
$img = imagecreate(100, 40);
$color_fondo = imagecolorallocate($img, 125, 196, 219);
$color_texto = imagecolorallocate($img, 0, 4, 255);
imagestring($img, 5, 20, 10, $_SESSION['captcha'], $color_texto);
imagejpeg($img);
?>