<?php 
$filePath = $_GET['file'];
header('Content-Type: image/jpeg');
readfile($filePath);
?>
