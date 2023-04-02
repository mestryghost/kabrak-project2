<?php
$file = 'gallery-1.jpg'; // Name of the image file
$path = $_SERVER['ANIPHOTO\assets\img\gallery\gallery-1.jpg'] . '/' . $file;
$size = filesize($path);

// Set headers to force download
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');
header('Content-disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . $size);

// Output the file
readfile($path);
?>







