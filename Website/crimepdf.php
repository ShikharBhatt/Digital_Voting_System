<?php
session_start();
//$f='C:/xamppp/htdocs/uploads/59c6458e73ff52.02870694.pdf';

$f='C:/xampp/htdocs/uploads/crime/'.$_SESSION['C_AFF'];
//echo "<br>".$f;
$file = $f;
$filename = $_SESSION['C_AFF']; 

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>

 