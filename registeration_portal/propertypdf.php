<?php
session_start();
//$f='C:/xamppp/htdocs/uploads/59d709dfc43a17.30103171.pdf';

$f='C:/xamppp/htdocs/uploads/property/'.$_SESSION['PROP_AFF'];							//path of file
//echo "<br>".$f;
$file = $f;
$filename = $_SESSION['PROP_AFF']; 														//name of file
//echo '<script>alert($_SESSION['PROP'])</script>';
header('Content-type: application/pdf');												//code for pdf retrieval
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>

 