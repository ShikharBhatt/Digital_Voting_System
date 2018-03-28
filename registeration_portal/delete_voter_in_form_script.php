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
<html>


<?php
session_start();

$con = mysqli_connect('localhost','root','12345');							//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))											//code for selecting databases
	echo 'cannot connect';

	$check=$_SESSION['DEL_VOTER_ID'];

	$query="delete from voter_table where  VOTER_ID ='$check' ";			//query to delete voter
	
	if(!mysqli_query($con,$query))
	{
		echo "<h1>failed</h1>";
		//echo("Error description: " . mysqli_error($con));
	}
	else
	{ 
		echo "<h1> Record Deleted Successfully<h1>";
	//	header("refresh:5; url=update_voter.php");
		header("refresh:5; url=fo_intermediate.php");						//load fo_intermediate.php after refresh
	}
	//error_reporting(E_ALL);
?>
</html>
</body>
