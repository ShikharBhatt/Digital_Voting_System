<?php
session_start();

$con = mysqli_connect('localhost','root','12345');										//code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))														//code for selecting database
	echo 'cannot connect';

$VOTER_ID=$_SESSION['VOTER_ID'];
$POLL_ID=$_SESSION['VOTE_FROM_POLL'];

$voter_cons="select CONS_ID 
			from voter_table 
			WHERE VOTER_ID='$VOTER_ID'";											   //query for selecting constitution of a voter

$co=mysqli_query($con,$voter_cons);													   //to execute query on database and store records in 'co' variable 

$voters=mysqli_fetch_array($co);													   //to fetch records into a 'voters' variable
$votes=$voters['CONS_ID'];

if($_POST['vote']=="NULL")															   //if voted for NOTA
{

	$star="insert into vote_table (VOTER_ID,CAND_ID,CONS_ID) 						
						values ('$VOTER_ID',NULL,'$votes')";						   //query for inserting vote

	$polls="update voter_table
						 set POLL_ID='$POLL_ID'
						 where VOTER_ID='$VOTER_ID'";							       //query for setting POLL_ID for voter

}
else                                                                                   //if voted for candidate
{

	//echo "<br><br>".$_POST['vote'];
	$VOTED_FOR=$_POST['vote'];
	$star="insert into vote_table (VOTER_ID,CAND_ID,CONS_ID) 
							values ('$VOTER_ID','$VOTED_FOR','$votes')";			   //query for inserting vote

	$polls="update voter_table
						 set POLL_ID='$POLL_ID' 
						 where VOTER_ID='$VOTER_ID'";								   //query for setting POLL_ID for voter

}
if(mysqli_query($con,$star))														   //execute suitable query
	{
		
		//echo "transferring your vote.......";
		//sleep(1);
		$status="select STATUS 
				 from voter_table
				 where VOTER_ID='$VOTER_ID'";		   								  //query for checking status

		if($result=mysqli_query($con,$status))
		{
			$row=mysqli_fetch_array($result);
			if($row['STATUS']=='YES')
				{
					$zz=mysqli_query($con,$polls);
				//echo "<h2>you have successfully voted !<h2>";
				header("refresh:2;url=successful_vote.php");						//load successful_vote.php after refresh
				//header("refresh:2;url=vportalvoter_final.php");
			    }
			else
				echo "problem in yes checking";
		}
		else
			echo "0 rows returned";

	}
else
	{ 
		echo "<br>error occurred while transferring your vote(voting twice) !<h2>";
		header("refresh:2;url=vportalvoter_final.php");
	//	echo ("error".mysql_error($con));
	}
?>
