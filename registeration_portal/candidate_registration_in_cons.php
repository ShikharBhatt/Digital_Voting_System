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
//fire trigger
session_start();
$REG=$_SESSION['REGISTERED'];
if($REG==='Yes')
		{
			$con = mysqli_connect('localhost','root','12345');								//code for database connectivity
			if(!$con) echo 'cannot connect';
			if(!mysqli_select_db($con,'dvs'))												//code for selecting database
				echo 'cannot connect';

				
				$check=$_SESSION['VOTER_ID'];
				$CONS_ID= $_SESSION['CONSM_ID'];
				$CONS_NAME=$_SESSION['CONSM_NAME'];
				$star="select * from candidate_table where VOTER_ID='$check'";				//query for selecting candidate 
				
				
				$result=mysqli_query($con,$star); 											//to execute query on database and store records in 'result' variable 

				$row=mysqli_fetch_array($result);											//to fetch records into a 'row' variable

				if($row['VOTER_ID']===$check)														
				{		
					$CAND_ID=$row['CAND_ID'];												
					//echo "<br><br>".$CAND_ID." ".$CONS_ID;
					
					$query="select count(*) as count_ ,CT_CONS_ID 							
							from cand_cons_table where CAND_ID='$CAND_ID'";					//query for counting candidate registration

					$result1=mysqli_query($con,$query);										//to execute query on database and store records in 'result' variable

					$row1=mysqli_fetch_array($result1);										//to fetch records into a 'row' variable

					if($row1['count_']<2 && ($row1['CT_CONS_ID']!== $CONS_ID ) )
					{
						$query="insert into cand_cons_table 
											(CAND_ID,CT_CONS_ID,CONS_NAME)
											values
											('$CAND_ID','$CONS_ID','$CONS_NAME')"; 			//query to register a candidate in a counstituency 

						if(mysqli_query($con,$query))										//to execute query on database 
							{//echo "triggered";
							echo'<script>alert("triggered")</script>';
							header("refresh:4;url=print_cand_form.php");
							}
						else
							echo "trigger failed";
					}
					else{
						echo '<script>alert("you are trying to register for more than 2 constituencies or more than one time from the same constituency")</script>';
						header("refresh:4;ro_intermediate.php");
					}

				}
				else
					echo "<h1>candidate not found in table</h1>";
				
		}		
		else {
				echo'<script>alert("not registered")</script>';
				header("refresh:4;url=ro_intermediate.php");
					//header("refresh:4;candidate_registration_inter.php");
		}
		
?>