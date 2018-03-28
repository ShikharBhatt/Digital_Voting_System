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
/*if(!isset($_POST['VOTER_ID']))
{
	header("refresh:1;url=candidate_registration_inter.php");
}*/

$con = mysqli_connect('localhost','root','12345');											//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))															//code for selecting database				
	echo 'cannot connect';

	
	$RO_ID = $_SESSION['RO_ID'];															//storing value of session variable RO_ID in variable 'RO_ID'
	$CONS_ID= $_SESSION['CONSM_ID'];														//storing value of session variable CONSM_ID in variable 'CONSM_ID'
	$VOTER_ID = $_SESSION['VOTER_ID'];														//storing value of session variable VOTER_ID in variable 'VOTER_ID'
	$FNAME= $_SESSION['FNAME'];																//storing value of session variable FNAME in variable 'FNAME'
	$MNAME = $_SESSION['MNAME'];															//storing value of session variable MNAME in variable 'MNAME'
	$LNAME = $_SESSION['LNAME'];															//storing value of session variable LNAME in variable 'LNAME'
	$PARTY_NAME= $_POST['PARTY_NAME'];														//storing value of session variable PARTY_NAME in variable 'PARTY_NAME'
	$WORK_EXP = $_POST['WORK_EXP'];															//storing value of session variable WORK_EXP in variable 'WORK_EXP'
	$POL_EXP= $_POST['POL_EXP'];															//storing value of session variable POL_EXP in variable 'POLL_EXP'

	$ACHIEVEMENTS = $_POST['ACHIEVEMENTS'];
	
	$EDU_LEVEL= $_SESSION['EDU_LEVEL'];
	
										/*	echo $RO_ID;echo "<br>";
											echo $CONS_ID;echo "<br>";
											echo $VOTER_ID;echo "<br>";
											echo $FNAME;echo "<br>";
											echo $MNAME;echo "<br>";
											echo $LNAME;echo "<br>";
											echo $PARTY_NAME;echo "<br>";
											echo $WORK_EXP;echo "<br>";
											echo $POL_EXP;echo "<br>";
											echo $ACHIEVEMENTS;echo "<br>";	
											echo $EDU_LEVEL;echo "<br>";*/
											
											
	//$query="insert into voter_table()values(11,'$name') ";
	//$CAND_ID='cad_'.mt_rand(010,100);
	/*$star="INSERT INTO candidate_table (VOTER_ID,PARTY_NAME,FNAME,MNAME,LNAME,EDU_LEVEL,WORK_EXP,POL_EXP,ACHIEVEMENTS)
	values ('$VOTER_ID','$PARTY_NAME','$FNAME','$MNAME','$LNAME','$EDU_LEVEL','$WORK_EXP','$POL_EXP','$ACHIEVEMENTS')";*/
	
	/*$star="INSERT INTO fake_table (VOTER_ID,PARTY_NAME,FNAME,MNAME,LNAME)
	values ('$VOTER_ID','$PARTY_NAME','$FNAME','$MNAME','$LNAME')";*/
	
/*	if(!mysqli_query($con,$star))
	{		
		echo 'not registered';
		
	}*/
//	else
//	{
		
		$file = $_FILES['PROP_AFF'];    															//receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name = $file['name'];
	//	echo $name;
		$fileext = explode('.',$name);
		$afileext= strtolower(end($fileext));
		
		$file1 = $_FILES['BUSS_AFF'];    															//receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name1 = $file1['name'];
	//	echo " ".$name1;
		$fileext1 = explode('.',$name1);
		$afileext1= strtolower(end($fileext1));
		
		$file2= $_FILES['CRIM_AFF'];    															//receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name2 = $file2['name'];
	//	echo " ".$name2;
		$fileext2 = explode('.',$name2);
		$afileext2= strtolower(end($fileext2));

		$file3 = $_FILES['PARTY_SYMBOL'];   														//receive the posted file
		$name3 = $file['name'];
	//	echo " ".$name3;
		$fileext3 = explode('.',$name3);
		$afileext3= strtolower(end($fileext3));

		
		$allowed = array('pdf','jpg');																//defining array 'allowed' with contents 'pdf' and 'jpg'

		if(in_array($afileext,$allowed) 
			&& in_array($afileext1,$allowed) 
			&& in_array($afileext2,$allowed) 
			&& in_array($afileext3,$allowed))
		{	
			//if($file['error']===0)
			//$content = addslashes(file_get_contents($_FILES['PROP_AFF']['tmp_name']));
			//echo $content;
			//$property = addslashes(file_get_contents($_FILES['PROP_AFF']['tmp_name']));
			//$bussaff = addslashes(file_get_contents($_FILES['BUSS_AFF']['tmp_name']));
			//$crime = addslashes(file_get_contents($_FILES['CRIM_AFF']['tmp_name']));
			$party=	addslashes(file_get_contents($_FILES['PARTY_SYMBOL']['tmp_name']));

			//$propertyp = "C:/xamppp/htdocs/uploads/" . uniqid('',true).".".$afileext; 

			$property = uniqid('',true).".".$afileext; 											// renaming file  with unique id
			$propertypath = "C:/xampp/htdocs/uploads/property/" .$property;					// moving property(aff)  to uploads folder 

			$bussaff = uniqid('',true).".".$afileext1; 											// renaming file  with unique id 
			$businesspath = "C:/xampp/htdocs/uploads/business/" .$bussaff; 					// moving business(aff)  to uploads folder 
			
			$crime = uniqid('',true).".".$afileext2; 											// renaming file  with unique id
			$crimepath = "C:/xampp/htdocs/uploads/crime/" .$crime; 							// moving crime(aff)  to uploads folder 

			//echo"<br>".$property;
			if (move_uploaded_file($file['tmp_name'],$propertypath) 
				&& move_uploaded_file($file1['tmp_name'],$businesspath)
				&& move_uploaded_file($file2['tmp_name'],$crimepath) 
			   )
			{
			/*	echo "<br>".$file['tmp_name'];
				echo "uploaded and moved";

				echo "<br>".$file1['tmp_name'];
				echo "uploaded and moved";

				echo "<br>".$file2['tmp_name'];
				echo "uploaded and moved";*/
				
			
			//$content =$path;
			$star="INSERT INTO 
			candidate_table (
							VOTER_ID,PARTY_NAME,PARTY_SYMBOL,FNAME,MNAME,LNAME,
							EDU_LEVEL,WORK_EXP,POL_EXP,ACHIEVEMENTS,PROP_AFF,
							BUSS_AFF,CRIM_AFF)
					values ('$VOTER_ID','$PARTY_NAME','$party','$FNAME','$MNAME',
							'$LNAME','$EDU_LEVEL','$WORK_EXP','$POL_EXP',
							'$ACHIEVEMENTS','$property','$bussaff','$crime')";					//query to register a candidate
		
					if(!mysqli_query($con,$star))												//for already registered candidates 
					{		
							//echo'<script>alert("already registered...")</script>';
							//echo ("Error description: " . mysqli_error($con));					
							$_SESSION['REGISTERED']="Yes";

							header("refresh:3;url=candidate_registration_in_cons.php");			//load candidate_registration_in_cons.php after refresh 
					}	
				
					else                                                                       	//for newly registered candidates
					{
						echo'<script>alert("registered")</script>';
						//echo "<br>image fetched ......>";
						$_SESSION['REGISTERED']="Yes";
						header("refresh:2;url=candidate_registration_in_cons.php");				//load candidate_registration_in_cons.php after refresh 
					}
			}
			else
				{
				 echo '<script>alert("Error description: " . mysqli_error($con))</script>';
				 header("refresh:2;url=candidate_registration.php");							//load candidate_registration.php after refresh 
				}
		}
		else		
		{	echo'<script>alert("Not expected file !!Not registered")</script>';
			header("refresh:2;url=candidate_registration.php");									//load candidate_registration.php after refresh 
		}
?>

