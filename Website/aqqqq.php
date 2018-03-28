
<?php
session_start();
/*if(!isset($_POST['VOTER_ID']))
{
	header("refresh:1;url=candidate_registration_inter.php");
}*/

$con = mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))
	echo 'cannot connect';

	$check=$_SESSION['UP_CANDIDATE_ID'];
	$RO_ID = $_SESSION['RO_ID'];
	$CONS_ID= $_SESSION['CONSM_ID'];
	$VOTER_ID = $_SESSION['VOTER_ID'];
	$FNAME= $_POST['FNAME'];
	$MNAME = $_POST['MNAME'];
	$LNAME = $_POST['LNAME'];
	$PARTY_NAME= $_POST['PARTY_NAME'];
	$WORK_EXP = $_POST['WORK_EXP'];
	$POL_EXP= $_POST['POL_EXP'];

	$ACHIEVEMENTS = $_POST['ACHIEVEMENTS'];
	
	$EDU_LEVEL= $_POST['EDU_LEVEL'];
											echo $check;
											echo $_SESSION['UP_CANDIDATE_ID'];
											echo $RO_ID;echo "<br>";
											echo $CONS_ID;echo "<br>";
											echo $VOTER_ID;echo "<br>";
											echo $FNAME;echo "<br>";
											echo $MNAME;echo "<br>";
											echo $LNAME;echo "<br>";
											echo $PARTY_NAME;echo "<br>";
											echo $WORK_EXP;echo "<br>";
											echo $POL_EXP;echo "<br>";
											echo $ACHIEVEMENTS;echo "<br>";	
											echo $EDU_LEVEL;echo "<br>";
											
											
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
		
		$file = $_FILES['PROP_AFF'];    //receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name = $file['name'];
		echo $name;
		$fileext = explode('.',$name);
		$afileext= strtolower(end($fileext));

		$file1 = $_FILES['BUSS_AFF'];    //receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name1 = $file1['name'];
		echo " ".$name1;
		$fileext1 = explode('.',$name1);
		$afileext1= strtolower(end($fileext1));
		
		$file2= $_FILES['CRIM_AFF'];    //receive the posted file
		//echo  $_FILES['PRH']['name'];
		$name2 = $file2['name'];
		echo " ".$name2;
		$fileext2 = explode('.',$name2);
		$afileext2= strtolower(end($fileext2));

		$file3 = $_FILES['PARTY_SYMBOL'];    //receive the posted file
		$name3 = $file['name'];
		echo " ".$name3;
		$fileext3 = explode('.',$name3);
		$afileext3= strtolower(end($fileext3));
		
		$allowed = array('pdf','jpg');
		if(in_array($afileext,$allowed) && in_array($afileext1,$allowed) && in_array($afileext2,$allowed) && in_array($afileext3,$allowed))
		{	
			$property = addslashes(file_get_contents($_FILES['PROP_AFF']['tmp_name']));
			$bussaff = addslashes(file_get_contents($_FILES['BUSS_AFF']['tmp_name']));
			$crime = addslashes(file_get_contents($_FILES['CRIM_AFF']['tmp_name']));
			$party=	addslashes(file_get_contents($_FILES['PARTY_SYMBOL']['tmp_name']));
			//if($file['error']===0)
			//$content = addslashes(file_get_contents($_FILES['PROP_AFF']['tmp_name']));
			//echo $content;
			/*$path = "C:/xamppp/htdocs/uploads/" . uniqid('',true).".".$afileext; // 5
			if (move_uploaded_file($file['tmp_name'], $path))
			{
				echo "<br>".$file['tmp_name'];
				echo "uploaded and moved";
				
			}*/
			//$content =$path;
			$property = uniqid('',true).".".$afileext; // moving property(aff)  to uploads folder 
			$propertypath = "C:/xamppp/htdocs/uploads/property/" .$property; // moving property(aff)  to uploads folder 

			$bussaff = uniqid('',true).".".$afileext1; // moving property(aff)  to uploads folder 
			$businesspath = "C:/xamppp/htdocs/uploads/business/" .$bussaff; // moving property(aff)  to uploads folder 
			
			$crime = uniqid('',true).".".$afileext2; // moving property(aff)  to uploads folder 
			$crimepath = "C:/xamppp/htdocs/uploads/crime/" .$crime; // moving property(aff)  to uploads folder 

			echo"<br>".$property;
if (move_uploaded_file($file['tmp_name'],$propertypath)&&move_uploaded_file($file1['tmp_name'],$businesspath)&&move_uploaded_file($file2['tmp_name'],$crimepath))
			{
				echo "<br>".$file['tmp_name'];
				echo "uploaded and moved";

				echo "<br>".$file1['tmp_name'];
				echo "uploaded and moved";

				echo "<br>".$file2['tmp_name'];
				echo "uploaded and moved";
				
			}
			else
				echo("*******upload_Error description: " . mysqli_error($con));
			//$content =$path;
			$star=" update candidate_table  set 
			VOTER_ID='$VOTER_ID',PARTY_NAME='$PARTY_NAME',FNAME ='$FNAME',MNAME='$MNAME' ,LNAME='$LNAME', 
			EDU_LEVEL='$EDU_LEVEL', WORK_EXP='$WORK_EXP', POL_EXP='$POL_EXP', ACHIEVEMENTS='$ACHIEVEMENTS', PROP_AFF='$property',BUSS_AFF='$bussaff',CRIM_AFF='$crime',PARTY_SYMBOL='$party' where CAND_ID='$check'";
		
					if(!mysqli_query($con,$star))
					{		
						echo '<br>FAILED TO UPDATE.....';
						echo("*******upload_Error description: " . mysqli_error($con));
							/*$_SESSION['REGISTERED']="Yes";
							header("refresh:10;candidate_registration_in_cons.php");*/
					}
				
					else
					{
						echo "<br>updated";
						/*echo "<br>image fetched ......>";
						$_SESSION['REGISTERED']="Yes";
						header("refresh:10;candidate_registration_in_cons.php");*/
					}
		}
		
		else		
		{	echo "not expected file!!  not registered";
				header("refresh:4;candidate_registration.php");
		}
	
//header("refresh:4;candidate_registration_inter.php");
?>

