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
	
<?php
session_start();

$con = mysqli_connect('localhost','root','12345');										 //code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))														 //code for selecting database	
	echo 'cannot connect';

		$FO_ID=$_SESSION['FO_ID'];
		$TITLE=$_POST['TITLE'];
		//$VOTER_ID=//"UV".rand(2000,9999999999);
        $CONS_ID=$_SESSION['FCONSM_ID'];
        $CONS_NAME=$_SESSION['FCONSM_NAME'];

        $TITLE=$_POST['TITLE'];
        $FNAME=$_POST['FNAME'];
		$MNAME=$_POST['MNAME'];
        $LNAME=$_POST['LNAME'];
        $SEX=$_POST['SEX'];
        $DOB=$_POST['DOB'];

        $AADHAAR=$_POST['AADHAAR'];
   		$_SESSION['AADHAAR']=$AADHAAR;
        $STREET_ADD=$_POST['STREET_ADD'];
        $DISTRICT=$_POST['DISTRICT'];
        $STATE=$_POST['STATE'];
        $PINCODE=$_POST['PINCODE'];
        $POB=$_POST['POB'];
        $EDU_LEVEL=$_POST['EDU_LEVEL'];
        $CASTE=$_POST['CASTE'];
        $RELIGION=$_POST['RELIGION'];
        $NATIVE_LANG=$_POST['NATIVE_LANG'];
        $INCOME=$_POST['INCOME'];
        $PHY_CHAL=$_POST['PHY_CHAL'];
        $OCCP=$_POST['OCCP'];
        $MOB_NO=$_POST['MOB_NO'];
        $EMAIL=$_POST['EMAIL'];
        $FORS_NAME=$_POST['FORS_NAME'];
        $FORS_MNAME=$_POST['FORS_MNAME'];
        $FORS_LNAME=$_POST['FORS_LNAME'];
        $FORS_ID=$_POST['FORS_ID'];
        $OSE=$_POST['OSE'];
        $SERV=$_POST['SERV'];

        $P_VID=$_POST['P_VID'];

        $CITY=$_POST['CITY'];

    	$PASS_NO=$_POST['PASS_NO'];
    	
    //echo "PASS_NO----".$PASS_NO;
    	
        	$VISA_NO=$_POST['VISA_NO'];
        	
    	

//echo "VISA_NO----".$VISA_NO;

 $file = $_FILES['AADHAAR_PROOF'];    														//receive the posted file
		
		$name = $file['name'];
		//echo $name;
		$fileext = explode('.',$name);
		$afileext= strtolower(end($fileext));
		


$file1 = $_FILES['PHOTO'];    																//receive the posted file
		
		$name1 = $file1['name'];
		//echo $name1;
		$fileext1 = explode('.',$name1);
		$afileext1= strtolower(end($fileext1));

$file2 = $_FILES['RESIDENT_PROOF'];    														//receive the posted file
		
		$name2 = $file2['name'];
		//echo " ".$name2;
		$fileext2 = explode('.',$name2);
		$afileext2= strtolower(end($fileext2));
	

		$allowed = array('pdf','jpg');


if(in_array($afileext,$allowed) 
	&& in_array($afileext1,$allowed) 
	&& in_array($afileext2,$allowed))
	{	
			
	$content1 = addslashes(file_get_contents($_FILES['AADHAAR_PROOF']['tmp_name']));
	$content2 = addslashes(file_get_contents($_FILES['PHOTO']['tmp_name']));
	$content3 = addslashes(file_get_contents($_FILES['RESIDENT_PROOF']['tmp_name']));

   //$VOTER_ID = '000000000078';
	////echo $content 
    	//echo $P_VID."in if"; 
	$query="insert into voter_table
	(        
         CONS_ID,
         CONS_NAME,
         TITLE,
         FNAME,
         MNAME,
         LNAME,
         SEX,
         DOB,
         FORS_NAME,
         FORS_MNAME,
         FORS_LNAME,
        
         AADHAAR,
		 STREET_ADD,
         DISTRICT,
         STATE,
         PINCODE,
         POB,
         EDU_LEVEL,
         CASTE,
         RELIGION,
         NATIVE_LANG,
         INCOME,
         PHY_CHAL,
         OCCP,
         MOB_NO,
         EMAIL,
		AADHAAR_PROOF,
		PHOTO,
		RESIDENT_PROOF,
         FO_ID,
         OSE,
         SERV ,       
         CITY,
         DOR 
    )
	
		values( 
											'$CONS_ID',
											'$CONS_NAME',
											'$TITLE',
											'$FNAME',
											'$MNAME',
											'$LNAME',
											'$SEX',
											'$DOB',
											'$FORS_NAME',
									        '$FORS_MNAME',
									        '$FORS_LNAME',
									      
											'$AADHAAR',
											'$STREET_ADD',	
											'$DISTRICT',
											'$STATE',
											'$PINCODE',
											'$POB',
											'$EDU_LEVEL',
											'$CASTE',
											'$RELIGION',
											'$NATIVE_LANG',
											'$INCOME',
											'$PHY_CHAL',
											'$OCCP',
											'$MOB_NO',
											'$EMAIL',
											'$content1',												
											'$content2',												
											'$content3',												
											'$FO_ID',
											'$OSE',
											'$SERV',	
											'$CITY',
											now() )";													//query to register a voter
		
		

				
				if(!mysqli_query($con,$query))
				{
					 echo("Error description: " .mysqli_error($con));

				}
				else
				{ 
					 if(!empty($P_VID))
					{
						$pquery="UPDATE voter_table SET P_VID='$P_VID' WHERE AADHAAR='$AADHAAR'";				//query to inset proxy if provided
						mysqli_query($con,$pquery);
					}
					if(!empty($PASS_NO))
					{
						$passquery="UPDATE voter_table SET PASS_NO='$PASS_NO' WHERE AADHAAR='$AADHAAR'";		//query to inset passport no. if provided
						mysqli_query($con,$passquery);
					}
					if(!empty($VISA_NO))
					{
						$visaquery="UPDATE voter_table SET VISA_NO='$VISA_NO' WHERE AADHAAR='$AADHAAR'";		//query to inset visa no. if provided
						mysqli_query($con,$visaquery);
					}
					if(!empty($FORS_ID))
					{
						$visaquery="UPDATE voter_table SET FORS_ID='$FORS_ID' WHERE AADHAAR='$AADHAAR'";		//query to inset father/spouse voter id if provided
						mysqli_query($con,$visaquery);
					}
					header("refresh:5; url=print_voter_form.php");
				}
	
	}

else		
		{	//echo "not expected file uploaded !!  not registered";
				header("refresh:4;Voter_form.php");																//load update_candidate_in_form.php after refresh
		}
?>
<div class="loader"></div>
</html>
</body>
