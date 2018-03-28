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
	session_start();
	if(!isset($_POST['VOTER_ID']))
	{
		header("refresh:1;url=candidate_registration_inter.php");
	}	
	
	$con = mysqli_connect('localhost','root','12345');										//code for database connectivity
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))														//code for selecting database
		echo 'cannot connect';

				$check=$_POST['VOTER_ID'];
				//echo "checking for ".$check;
				$_SESSION['VOTER_ID']=$check;
				$star="select *,DATEDIFF(SYSDATE(),DOB) AS age from voter_table where VOTER_ID='$check'";					//query for selecting voter
					
					$result=mysqli_query($con,$star); 										//to execute query on database and store records in 'result' variable

					$row=mysqli_fetch_array($result);
															//to fetch records into a 'row' variable
					//echo "-------result -------".$result['0'];
					if($row['VOTER_ID']===$check && $row['age']>=9132)
					{							
						//echo "in if..... ";
						$_SESSION['FNAME']=$row['FNAME'];									//making value of field FNAME as a Session Variable
						$_SESSION['MNAME']=$row['MNAME'];									//making value of field MNAME as a Session Variable
						$_SESSION['LNAME']=$row['LNAME'];									//making value of field LNAME as a Session Variable
						//$_SESSION['PARTY_NAME']=$row['PARTY_NAME'];
						$_SESSION['TITLE']=$row['TITLE'];									//making value of field TITLE as a Session Variable
						$_SESSION['EDU_LEVEL']=$row['EDU_LEVEL'];							//making value of field EDU_LEVEL as a Session Variable

						//echo $_SESSION['FNAME'];
						//echo $_SESSION['MNAME'];
						//echo $_SESSION['LNAME'];
						//echo $_SESSION['PARTY_NAME'];
						//echo $_SESSION['TITLE'];
						//echo $_SESSION['EDU_LEVEL'];
						
												
						header("refresh:2;url=candidate_registration.php");					//load candidate_registration.php after refresh 
					}
				else if($row['age']<9132)
				{

						echo '<script>alert("Candidate must be atleast 25 years of age")</script>';
						header("refresh:2;url=candidate_registration_inter.php");			//load candidate_registration_inter.php after refresh 

				}
				else
					{
						echo '<script>alert("Not Found....!!")</script>';
						header("refresh:2;url=candidate_registration_inter.php");			//load candidate_registration_inter.php after refresh 
					
					}
			
			
		

	?>

