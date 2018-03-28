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
//session_name("voter_session");
//session_start();
$con = mysqli_connect('localhost','root','12345');											//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))															//code for selecting database
	echo 'cannot connect';
	
	$VID = $_POST['V_ID'];
	$VPASS= $_POST['V_PASS'];
	//echo $VID."asdfghjk"."<br>".$VPASS;
	$star="select *,TIMESTAMPDIFF(YEAR,DOB,CURDATE()) AS AGE 
		   from voter_table 
		   where VOTER_ID= '$VID' and PASSWORD='$VPASS'";

	if($result=mysqli_query($con,$star))													//to execute query on database and store result in 'result' variable 
	{		
		$row=mysqli_fetch_array($result);													//to fetch records into 'row' variable
		if($row['VOTER_ID']== $VID && $row['PASSWORD']==$VPASS )
		{
			$_SESSION['VOTER_ID'] = $VID;
			$_SESSION['AGE'] = $row['AGE'];
		//	echo "in our destination";
		//	echo $row['VOTER_ID'];
			if($row['AGE']>60)
			{
				header("refresh:2;url=timer_old.php");										//load timer_old.php after refresh
			}
			else
			{
				header("refresh:2;url=timer.php");											//load timer.php after refresh
			}
		}
		else 
		{	
			echo '<script>alert("wrong password/username")</script>';
			//session_name("voter_session");
			//session_destroy();
			//echo $_SESSION['VOTER_ID'];
			//echo $_SESSION['FO_ID'];
			header("refresh:2; url=vportalvoter_final.php");								//load  vortalvoter_final.php after refresh
		}
		
	}
	else
		{	
			echo "use correct identifier";
			///session_name("voter_session");
			session_destroy();
		 	header("refresh:10; url=vportalvoter_final.php");
		}
	
		
	
		
?>

