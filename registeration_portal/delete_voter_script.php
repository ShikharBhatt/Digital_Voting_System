<?php
	
	session_start();
	if(!isset($_POST['DEL_VOTER_ID']) || trim($_POST['DEL_VOTER_ID'])=='')					//handling empty request
	{
		header("refresh:0;url=delete_voter.php");		//	echo "is empty";		
	}
	else
	{
//	echo "<br>up_voter_id";
//	echo $_POST['DEL_VOTER_ID'];
	$_SESSION['DEL_VOTER_ID']=$_POST['DEL_VOTER_ID'];
//	echo $_SESSION['DEL_VOTER_ID'];
	$con = mysqli_connect('localhost','root','12345');										//code for database connectivity
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))
		echo 'cannot connect';

				$check=$_POST['DEL_VOTER_ID'];															
				$star="select * from voter_table where VOTER_ID='$check'";					//query for selecting a voter
					
//				echo "<br><br><br>into main code";

					$result=mysqli_query($con,$star); 										//code for database connectivity 
					$row=mysqli_fetch_array($result);										//to execute query on database and store records in 'result' variable 
					if($row['VOTER_ID']===$check)
					{		
						
						//echo "<br>in if..... ";

						$_SESSION['TITLE']=$row['TITLE'];
						$_SESSION['FNAME']=$row['FNAME'];
						$_SESSION['MNAME']=$row['MNAME'];
						$_SESSION['LNAME']=$row['LNAME'];
						
					    $CONS_ID=$row['CONS_ID'];

				       
				        $_SESSION['SEX']=$row['SEX'];
				        $_SESSION['DOB']=$row['DOB'];
				        $_SESSION['AADHAAR']=$row['AADHAAR'];

				        $_SESSION['STREET_ADD']=$row['STREET_ADD'];
				        $_SESSION['DISTRICT']=$row['DISTRICT'];
				        $_SESSION['STATE']=$row['STATE'];
				        $_SESSION['PINCODE']=$row['PINCODE'];
				        $_SESSION['POB']=$row['POB'];

				        $_SESSION['EDU_LEVEL']=$row['EDU_LEVEL'];
				        $_SESSION['CASTE']=$row['CASTE'];
				        $_SESSION['RELIGION']=$row['RELIGION'];
				        $_SESSION['NATIVE_LANG']=$row['NATIVE_LANG'];
				        $_SESSION['INCOME']=$row['INCOME'];
				        $_SESSION['PHY_CHAL']=$row['PHY_CHAL'];
				        $_SESSION['OCCP']=$row['OCCP'];
				        $_SESSION['MOB_NO']=$row['MOB_NO'];
				        $_SESSION['EMAIL']=$row['EMAIL'];
						//$_SESSION['AADHAAR_PROOF']=$row['AADHAAR_PROOF'];
				       // $_SESSION['PHOTO']=$row['PHOTO'];
				       // $_SESSION['RESIDENT_PROOF']=$row['RESIDENT_PROOF'];
				        //$_SESSION['FO_ID']=$row['FO_ID'];
				        //$_SESSION['POLL_ID']=$row['POLL_ID'];
				        //$_SESSION['STATUS']=$row['STATUS'];
				        $_SESSION['OSE']=$row['OSE'];
				        $_SESSION['P_VID']=$row['P_VID'];
				        $_SESSION['CITY']=$row['CITY'];
				        $_SESSION['SERV']=$row['SERV'];
				        $_SESSION['PASS_NO']=$row['PASS_NO'];
				        $_SESSION['VISA_NO']=$row['VISA_NO'];
				        
						
/*						echo "<br>";				
						echo $_SESSION['FNAME']."<br>";
						echo $_SESSION['MNAME']."<br>";
						echo $_SESSION['LNAME']."<br>";
						//echo $_SESSION['PARTY_NAME'];
						echo $_SESSION['TITLE']."<br>";
						echo $_SESSION['EDU_LEVEL']."<br>";
*/											
						header("refresh:5;url=delete_voter_in_form.php");					//load delete_voter_in_form.php after refresh
					}
				
				else
					{
						echo '<script>alert("Voter not found!!")</script>';
						header("refresh:1;url=delete_voter.php");							//load delete_voter.php after refresh
					
					}
			
			
				
    }
	?>