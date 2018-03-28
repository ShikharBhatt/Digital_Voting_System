<?php
session_start();
$f='C:/xamppp/htdocs/uploads/59d64c276fa908.42776045.pdf';

//$f='C:/xamppp/htdocs/uploads/'.$_SESSION['PROP_AFF'];
//echo "<br>".$f;
$file = $f;
$filename ='59d64c276fa908.42776045.pdf'; 

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>

 