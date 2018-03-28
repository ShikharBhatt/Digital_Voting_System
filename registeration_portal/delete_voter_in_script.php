<html>
<body>

<?php
session_start();

$con = mysqli_connect('localhost','root','12345');											//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))															//code for selecting database
	echo 'cannot connect';

		$check=$_SESSION['UP_VOTER_ID'];
		$CONS_ID=$_SESSION['FCONSM_ID'];
		$FO_ID=$_SESSION['FO_ID'];
		


		$TITLE=$_POST['TITLE'];
        $TITLE=$_POST['TITLE'];
        $FNAME=$_POST['FNAME'];
		$MNAME=$_POST['MNAME'];
        $LNAME=$_POST['LNAME'];
        $SEX=$_POST['SEX'];
        $DOB=$_POST['DOB'];
        $AADHAAR=$_POST['AADHAAR'];
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
		//$AADHAAR_PROOF=$_POST['AADHAAR_PROOF'];
       // $PHOTO=$_POST['PHOTO'];
       // $RESIDENT_PROOF=$_POST['RESIDENT_PROOF'];
        //$FO_ID=$_POST['FO_ID'];
        //$POLL_ID=$_POST['POLL_ID'];
        //$STATUS=$_POST['STATUS'];
        $OSE=$_POST['OSE'];
        $P_VID=$_POST['P_VID'];
        $CITY=$_POST['CITY'];
   //$VOTER_ID = '000000000078';

	$query="update voter_table set        
         CONS_ID ='$CONS_ID', 
         TITLE ='$TITLE',
         FNAME ='$FNAME',
         MNAME ='$MNAME',
         LNAME ='$LNAME',											
         SEX ='$SEX',
         DOB ='$DOB',
         AADHAAR ='$AADHAAR',
		 STREET_ADD ='$STREET_ADD', 	
         DISTRICT ='$DISTRICT',
         STATE ='$STATE', 
         PINCODE ='$PINCODE', 
         POB ='$POB',
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
         CITY ='$CITY'  where  VOTER_ID ='$check' ";

      //   $query = "update voter_table set SEX = '$SEX' ,DOB = '$DOB' where VOTER_ID= '$check'";

											
											echo "VOTER_ID ----".$check;echo "<br>";
											
											

											echo "TITLE----".$TITLE;echo "<br>";
											echo "FNAME----".$FNAME;echo "<br>";
											echo "MNAME----".$MNAME;echo "<br>";
											echo "LNAME----".$LNAME;echo "<br>";
											echo "sex:  ----".$SEX;echo "<br>";
											echo "DOB ----".$DOB;echo "<br>";
											echo "CONS_ID----".$CONS_ID;echo "<br>";
											echo "AADHAAR----".$AADHAAR;echo "<br>";
											echo "STREET_ADD----".$STREET_ADD;echo "<br>";	
											echo "DISTRICT----".$DISTRICT;echo "<br>";
											echo "STATE----".$STATE;echo "<br>";
											echo "PINCODE----".$PINCODE;echo "<br>";
											echo "POB----".$POB;echo "<br>";
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
											
	
	if(!mysqli_query($con,$query))
	{
		echo "<h1>failed</h1>";
		echo("Error description: " . mysqli_error($con));
	}
	else
	{ 
		echo "<h1> recorded deleted<h1>";
	//	header("refresh:5; url=update_voter.php");
		header("refresh:5; url=imagecheck.php");
	}
	//error_reporting(E_ALL);
?>
</html>
</body>
