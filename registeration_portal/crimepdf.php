<?php
session_start();
//$f='C:/xamppp/htdocs/uploads/59c6458e73ff52.02870694.pdf';

$f='C:/xamppp/htdocs/uploads/crime/'.$_SESSION['CRIM_AFF'];									//path of file
//echo "<br>".$f;
$file = $f;
$filename = $_SESSION['CRIM_AFF']; 															//name of file

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');						//code for pdf retrieval
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>

 