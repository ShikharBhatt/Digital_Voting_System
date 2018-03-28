	<?php
	session_start();

	if(isset($_POST['SUB']) && $_POST['G_VOTER_ID']!='')
	{
		//echo "<br>G_voter_id";
	//echo $_POST['G_VOTER_ID'];
	$_SESSION['G_VOTER_ID']=$_POST['G_VOTER_ID'];
	//echo "<br>".$_SESSION['G_VOTER_ID'];
	$con = mysqli_connect('localhost','root','12345');
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))
		echo 'cannot connect';

				function random_password( $length = 8 ) {
   							 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012345789!@#$%^&*()_";
    						$password = substr( str_shuffle( $chars ), 0, $length );
    						return $password;
					}

				$check=$_POST['G_VOTER_ID'];
				$PASSWORD=random_password();
					$_SESSION['PASSWORD']=$PASSWORD;	
				$star="UPDATE voter_table SET PASSWORD='$PASSWORD' where VOTER_ID='$check' AND PASSWORD IS NULL";
					

				//echo "<br><br><br>into main code";

					 //successful execution of query;
					mysqli_query($con,$star);
					if(mysqli_affected_rows($con)>0)
					//$rows=mysqli_num_rows($result);
					//if($rows>0)
					{							
						//echo '<br>YOUR PASSWORD: '.$PASSWORD;					
						header("refresh:0;url=voter_for_password_script.php");

					}
				
				else
					{
						echo '<script>alert("not found")</script>';
						//echo '<br>not found pls....!!';
						header("refresh:0;url=voter_for_password.php");		
					
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
		</head>
	<div >
<form action="fo_intermediate.php" id="back">
	<button class="button button1" form="back" type="submit" name="back" style="position: absolute;margin-top: 0px;margin-left: 0px;" >Back</button>
</form>
	<form name="voter_for_password" id="voter_for_password"  method="post">
		<tr><td><label style="position:absolute;top:44%;left:20%;" >Voter ID :</label> 
	        <td><input style="position:absolute;top:42%;left:30%;" type="tel" name="G_VOTER_ID" minlength="10" maxlength="10" />   </tr>
	        <tr><label style="position:absolute;top:60%;left:20%;" >Password :</label> 
	        <input style="position:absolute;top:58%;left:30%;" type="text" disabled/></tr> 
	        <br>
	<button class="button button1" form="voter_for_password" type="submit" name="SUB" style="position:absolute;top:40%;right:30%;" >Generate</button>
	</form>
	</div>
	
	<body>
	</body>
	</html>



