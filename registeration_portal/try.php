<?php
$con = mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'company'))
	echo 'cannot connect';
$r=3;
$res=mysqli_query($con,"SELECT empdetails($r) as name");
while($row=mysqli_fetch_assoc($res))
echo $row['name'];
?>

