<html>
	<head>
		        <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

		<style type="text/css">
			.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    position :absolute;
    right: 0;
    left: 0;
    top:0;
    bottom: 0;
    margin :auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
		</style>
	</head>
	<body>
		<div class="loader"></div>
	</body>
</html>

<?php


//session_name("fo_session");
session_start();

$con = mysqli_connect('localhost','root','12345');												//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))																//code for selecting database
	echo 'cannot connect';
	
	$ID = $_POST['ID'];
	$PASS= $_POST['PASS'];
	//echo $ID."asdfghjk"."<br>".$PASS;
	
	$star="select * from fo_table where FO_ID= '$ID' and PASSWORD= '$PASS' ";					//query to verify FO
	if($result=mysqli_query($con,$star))
	{		
		$row=mysqli_fetch_array($result);
		if($row['FO_ID']== $ID && $row['PASSWORD']==$PASS)
		{
			$_SESSION['FO_ID']=$ID;
			$_SESSION['VOTE_FROM_POLL']=$row['POLL_ID'];
			header("refresh:5;url=vportalvoter_final.php");										//load vportalvoter_final.php after refresh
		}
		else 
		{	echo '<script>alert("wrong password/username")</script>';				
			//session_destroy();
			header("refresh:2; url=vportalfo_final.php");										//load vportalfo_final.php after refresh
		}
		
	}
	else
		{	echo '<script>alert(""use correct identifier")</script>';
			//session_destroy();
		  	header("refresh:2; url=vportalfo_final.php");										//load vportalfo_final.php after refresh
		}
	
		
	
		
?>


