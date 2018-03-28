<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
		<style type="text/css">
			.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 45%;
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
session_start();
$con = mysqli_connect('localhost','root','12345');										//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))														//code for selecting database
	echo 'cannot connect';
	
	$ID = $_POST['ID'];
	$PASS=md5(md5(md5($_POST['PASS'])));
	//$query="insert into voter_table()values(11,'$name') ";
	
	$star="select * from fo_table where FO_ID= '$ID' and E_PASSWORD= '$PASS' ";			//query to verify FO login credentials
	if($result=mysqli_query($con,$star))												//to execute query on database and store records in 'result' variable 
	{		
		$row=mysqli_fetch_array($result);												//to fetch records into a 'row' variable
		if($row['FO_ID']== $ID && $row['E_PASSWORD']==$PASS)
		{
		//	echo "<h1> welcome fo!</h1>";
		//	echo "<br>".$row['FO_ID'];

			$_SESSION['FO_ID']=$row['FO_ID'];
			$_SESSION['FCONSM_ID']=$row['CONS_ID'];
			$_SESSION['FCONSM_NAME']=$row['CONS_NAME'];
			$_SESSION['VOTER_ID']=$row['VOTER_ID'];

		/*	echo "<br>"."    ".$_SESSION['FO_ID'];
			echo "<br>"."    ".$_SESSION['FCONSM_ID'];
			echo "<br>"."    ".$_SESSION['FCONSM_NAME'];
			echo "<br>"."    ".$_SESSION['VOTER_ID'];*/
			header("refresh:1;url=fo_intermediate.php");								//load fo_intermediate.php after refresh
		}
		else 
		{	echo '<script>alert("wrong password/username")</script>';					
			header("refresh:2; url=modal_login.php");								    //load modal_login.php after refresh							
		}
		
	}
	else
		{	echo "use correct identifier";
		//	header("refresh:2; url=vportalfo.htmll");
		}
?>