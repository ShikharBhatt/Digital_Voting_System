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
	?>
	<?php


	$con = mysqli_connect('localhost','root','12345');
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))
		echo 'cannot connect';

		
		$ID = $_POST['ID'];
		$PASS= md5(md5(md5($_POST['PASS'])));

		//$query="insert into voter_table()values(11,'$name') ";
		
		$star="select * from ro_table where RO_ID= '$ID' and E_PASSWORD= '$PASS' ";
		if($result=mysqli_query($con,$star))//if query fails to execute
		{		
			$row=mysqli_fetch_array($result);
			if($row['RO_ID']== $ID && $row['E_PASSWORD']==$PASS)
			{
				//echo "<h2>Welcome! <br> RO </h2>" ;

				//echo " ".$row['RO_ID'];

				$_SESSION['RO_ID']=$row['RO_ID'];					//making RO_ID a session variable
				//echo "<br> SESSION OF RO -- ".$_SESSION['RO_ID'];

				$_SESSION['CONSM_ID']=$row['CONSM_ID'];				//making CONSM_ID a session variable
				//echo "<br> CONSM_ID -- ".$_SESSION['CONSM_ID'];
				
				$_SESSION['CONSM_NAME']=$row['CONSM_NAME'];

				$_SESSION['VOTER']=$row['VOTER_ID'];				//making CONSM_ID a session variable
				//echo "<br> VOTER_ID -- ".$_SESSION['VOTER'];
				//$_SESSION['LOGIN']='Yes';
				header("refresh:1;url=ro_intermediate.php");
				
			}
			else 
			{	echo '<script>alert("wrong password/username")</script>';
				header("refresh:2; url=modal_login.php");
			}
			
		}
		else
			{	echo "use correct identifier";
			//	header("refresh:2; url=ro_login_page.html");
			}
		
			
		
			

	?>
	
