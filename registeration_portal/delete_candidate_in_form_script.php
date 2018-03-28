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
/*if(!isset($_POST['VOTER_ID']))
{
	header("refresh:1;url=candidate_registration_inter.php");
}*/
$check=$_SESSION['DEL_CANDIDATE_ID'];
$con = mysqli_connect('localhost','root','12345');									//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))													//code for selecting database
	echo 'cannot connect';

			$star="delete from candidate_table where CAND_ID='$check'";
		
					if(!mysqli_query($con,$star))									//to execute query on database
					{		
						echo '<br>could not delete.....';							
								
					}
				
					else
					{
						echo "<br>record deleted ";						
					}
		
		
		header("refresh:4;delete_candidate.php");
?>

