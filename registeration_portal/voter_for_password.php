	<?php
	session_start();

	if(isset($_POST['SUB']) && $_POST['G_VOTER_ID']!='')
	{
		//echo "<br>G_voter_id";
	//echo $_POST['G_VOTER_ID'];
	$_SESSION['G_VOTER_ID']=$_POST['G_VOTER_ID'];
	//echo "<br>".$_SESSION['G_VOTER_ID'];

	$con = mysqli_connect('localhost','root','12345');											//code for database connectivity
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))															//code for selecting database
		echo 'cannot connect';
		$checks=$_POST['G_VOTER_ID'];
		$qu="select pass_gen($checks) as fl";								// function call to check voter's eligibility and status
		$result=mysqli_query($con,$qu);
		$flag=mysqli_fetch_array($result);
		if($flag['fl']==0)
		{

				function random_password( $length = 6 ) {
   							 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345789";
    						$password = substr( str_shuffle( $chars ), 0, $length );
    						return $password;
					}

				
				$PASSWORD=random_password();
					$_SESSION['PASSWORD']=$PASSWORD;	
				$star="UPDATE voter_table 
						SET PASSWORD='$PASSWORD' 
						where VOTER_ID='$checks' AND PASSWORD='*ELEC*'";						//query to set voter password
					

				//echo "<br><br><br>into main code";

					 //successful execution of query;
					mysqli_query($con,$star);													//to execute query on database
					if(mysqli_affected_rows($con)>0)
					//$rows=mysqli_num_rows($result);
					//if($rows>0)
					{							
						//echo '<br>YOUR PASSWORD: '.$PASSWORD;		
						echo '<script>alert("password generated")</script>';			
						header("refresh:5;url=voter_for_password_script.php");					//load voter_for_password_script.php after refresh 

					}
				
				else
					{
						echo '<script>alert("Error")</script>';
						//echo '<br>not found pls....!!';
						header("refresh:5;url=voter_for_password.php");		
					
					}
			}
			else if($flag['fl']==1)
			{
						echo '<script>alert("AGE CRITERIA NOT SATISFIED!")</script>';
						//echo '<br>not found pls....!!';
						header("refresh:5;url=voter_for_password.php");
			}
			
			else if($flag['fl']==2)
			{
						echo '<script>alert("YOU HAVE ALREADY VOTED!")</script>';
						//echo '<br>not found pls....!!';
						header("refresh:5;url=voter_for_password.php");
			}
			else
				
			{
				echo '<script>alert("this should not happen!")</script>';
				header("refresh:5;url=voter_for_password.php");

			}
				
    
	}
	?>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
	<link rel="stylesheet" type="text/css" href="form_style.css">
	<style>
	input[type=text],[type=tel],[type=number] {
    
    padding: 5px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-family: verdana;
    font-size: 12px;
   
    width:210px;
   }
   
	</style>
			    <script type="text/javascript">
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
		</head>
	<body background="shade.png" style="background-position: center; background-size:100%;">
			<header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>

	<div >
<form action="fo_intermediate.php" id="back">
	<button class="button button1" form="back" type="submit" name="back" style="position: absolute;margin-top: 0px;margin-left: 0px;" >Back</button>
</form>
	<form name="voter_for_password" id="voter_for_password"  method="post" autocomplete="off">
		<tr><td><label style="position:absolute;top:44%;left:20%;" >Voter ID :</label> 
	        <td><input style="position:absolute;top:42%;left:30%;" type="text" name="G_VOTER_ID" minlength="10" maxlength="10" onkeypress="isNumberKey(event)" />   </tr>
	        <tr><label style="position:absolute;top:60%;left:20%;" >Password :</label> 
	        <input style="position:absolute;top:58%;left:30%;" type="text" disabled/></tr> 
	        <br>
	<button class="button button2" form="voter_for_password" type="submit" name="SUB" style="position:absolute;top:40%;right:30%;" >Generate</button>
	</form>
	</div>
	
	<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
	</body>
	</html>



