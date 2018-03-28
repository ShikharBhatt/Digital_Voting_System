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
    </style>
    </head>
    <body>
    <div class="loader"></div>
    </body>
</html>
<?php
session_start();

$con = mysqli_connect('localhost','root','12345');                                 //code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))                                                   //code for selecting database
	echo 'cannot connect';

		$check=$_SESSION['UP_VOTER_ID'];
		$CONS_ID=$_SESSION['FCONSM_ID'];
		$FO_ID=$_SESSION['FO_ID'];
        $CONS_NAME=$_SESSION['FCONSM_NAME'];
		


		$TITLE=$_POST['TITLE'];
        $FNAME=$_POST['FNAME'];
		$MNAME=$_POST['MNAME'];
        $LNAME=$_POST['LNAME'];
        $SEX=$_POST['SEX'];
        $STREET_ADD=$_POST['STREET_ADD'];
        $DISTRICT=$_POST['DISTRICT'];
        $STATE=$_POST['STATE'];
        $PINCODE=$_POST['PINCODE'];
        $EDU_LEVEL=$_POST['EDU_LEVEL'];
        $CASTE=$_POST['CASTE'];
        $RELIGION=$_POST['RELIGION'];
        $NATIVE_LANG=$_POST['NATIVE_LANG'];
        $INCOME=$_POST['INCOME'];
        $PHY_CHAL=$_POST['PHY_CHAL'];
        $OCCP=$_POST['OCCP'];
        $MOB_NO=$_POST['MOB_NO'];
        $EMAIL=$_POST['EMAIL'];
		//$AADHAAR_PROOF=$_POST['AADHAAR_PROOF'];
       // $PHOTO=$_POST['PHOTO'];
       // $RESIDENT_PROOF=$_POST['RESIDENT_PROOF'];
        //$FO_ID=$_POST['FO_ID'];
        //$POLL_ID=$_POST['POLL_ID'];
        //$STATUS=$_POST['STATUS'];
        $OSE=$_POST['OSE'];
        $P_VID=$_POST['P_VID'];
        $CITY=$_POST['CITY'];
        $PASS_NO=$_POST['PASS_NO'];
        //echo $PASS_NO;
    
        $VISA_NO=$_POST['VISA_NO'];

   //$VOTER_ID = '000000000078';

$file = $_FILES['AADHAAR_PROOF'];                                                           //receive the posted file
        
        $name = $file['name'];
        //echo $name;
        $fileext = explode('.',$name);
        $afileext= strtolower(end($fileext));
        


$file1 = $_FILES['PHOTO'];                                                                  //receive the posted file
        
        $name1 = $file1['name'];
        //echo $name1;
        $fileext1 = explode('.',$name1);
        $afileext1= strtolower(end($fileext1));

$file2 = $_FILES['RESIDENT_PROOF'];                                                         //receive the posted file
        
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

	$query="update voter_table set        
         CONS_ID ='$CONS_ID',
         CONS_NAME='$CONS_NAME', 
         TITLE ='$TITLE',
         FNAME ='$FNAME',
         MNAME ='$MNAME',
         LNAME ='$LNAME',											
         SEX ='$SEX',
  		 STREET_ADD ='$STREET_ADD', 	
         DISTRICT ='$DISTRICT',
         STATE ='$STATE', 
         PINCODE ='$PINCODE', 
         EDU_LEVEL ='$EDU_LEVEL', 
         CASTE='$CASTE',
         RELIGION ='$RELIGION',
         NATIVE_LANG ='$NATIVE_LANG',
         INCOME ='$INCOME',
         PHY_CHAL ='$PHY_CHAL', 
         OCCP ='$OCCP', 
         MOB_NO ='$MOB_NO', 
         EMAIL ='$EMAIL',	
         FO_ID ='$FO_ID', 
         OSE ='$OSE',
         AADHAAR_PROOF='$content1', 	
         PHOTO='$content2',     
         RESIDENT_PROOF='$content3',     
         CITY ='$CITY'  where  VOTER_ID ='$check' ";                                        //query for updating voter

        if(!empty($P_VID))
        {
            //echo 'query running';
            $pquery="UPDATE voter_table 
            SET P_VID=$P_VID
            WHERE VOTER_ID=$check";
            mysqli_query($con,$pquery);                                                     //query for inserting proxy
        }
        if(!empty($PASS_NO))
        {
            //echo 'query 1 running';
            $passquery="UPDATE voter_table 
            SET PASS_NO=$PASS_NO 
            WHERE VOTER_ID=$check";
            mysqli_query($con,$passquery);                                                  //query for inserting passport
        }
        if(!empty($VISA_NO))
        {
            //echo 'query 2 running';
            $visaquery="UPDATE voter_table 
            SET VISA_NO=$VISA_NO 
            WHERE VOTER_ID=$check";
            mysqli_query($con,$visaquery);                                                  //query for inserting visa
        }

     
     
      //   $query = "update voter_table set SEX = '$SEX' ,DOB = '$DOB' where VOTER_ID= '$check'";

											
										/*	echo "VOTER_ID ----".$check;echo "<br>";
											
											

											echo "TITLE----".$TITLE;echo "<br>";
											echo "FNAME----".$FNAME;echo "<br>";
											echo "MNAME----".$MNAME;echo "<br>";
											echo "LNAME----".$LNAME;echo "<br>";
											echo "sex:  ----".$SEX;echo "<br>";
											
											echo "CONS_ID----".$CONS_ID;echo "<br>";
											
											echo "STREET_ADD----".$STREET_ADD;echo "<br>";	
											echo "DISTRICT----".$DISTRICT;echo "<br>";
											echo "STATE----".$STATE;echo "<br>";
											echo "PINCODE----".$PINCODE;echo "<br>";
											
											echo "EDU_LEVEL----".$EDU_LEVEL;echo "<br>";
											echo "CASTE----".$CASTE;echo "<br>";
											echo "RELIGION----".$RELIGION;echo "<br>";
											echo "NATIVE_LANG----".$NATIVE_LANG;echo "<br>";
											echo "INCOME----".$INCOME;echo "<br>";
											echo "PHY_CHAL----".$PHY_CHAL;echo "<br>";
											echo "OCCP----".$OCCP;echo "<br>";
											echo "MOB_NO----".$MOB_NO;echo "<br>";
											echo "EMAIL----".$EMAIL;echo "<br>";
											
											
											
											echo "FO_ID----".$FO_ID;echo "<br>";
											echo "OSE----".$OSE;echo "<br>";	
											echo "CITY----".$CITY;echo "<br>";
											echo "VISA NO".$VISA_NO;echo "<br>";
											echo "PASS_NO".$PASS_NO;echo "<br>";*/
											
	
	if(!mysqli_query($con,$query))
	{
		echo "<h1>failed</h1>";
		echo("Error description: " . mysqli_error($con));
	}
	else
	{ 
		//echo "<h1>update recorded <h1>";
	//	header("refresh:5; url=update_voter.php");
		header("refresh:5; url=print_voter_form.php");                                     //load fo_intermediate.php after refresh
	}
}
else
{
    echo "Appropriate  files not uploaded";
	//error_reporting(E_ALL);
}
?>


