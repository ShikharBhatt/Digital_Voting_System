	<?php
	session_start();

	if(isset($_POST['SUB']) && $_POST['PASSWORD']!='')
	{
		//echo "<br>PASSWORD";
	//echo $_POST['PASSWORD'];
	$_SESSION['PASSWORD']=$_POST['PASSWORD'];
	//echo "<br>".$_SESSION['PASSWORD'];
	$con = mysqli_connect('localhost','root','12345');
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))
		echo 'cannot connect';

			/*	function random_password( $length = 4 ) {
   							 $chars = "012345789";
    						$password = substr( str_shuffle( $chars ), 0, $length );
    						return $password;
					}*/

				$return_pass=$_SESSION['PASSWORD'];//random_password();
				$E_PASSWORD=md5(md5(md5($return_pass)));
				
				echo $return_pass."<br>".$E_PASSWORD."</label>";	
			
				}
				else
					{
						echo '<script>alert("not found")</script>';
						//echo '<br>not found pls....!!';
					//	header("refresh:0;url=voter_for_password.php");		
					
					}
			
			
				
    
	
	?>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
		<title>ENCRYPTION</title>
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
<!--<form  id="back">
	<button class="button button1" form="back" type="submit" name="back" style="position: absolute;margin-top: 0px;margin-left: 0px;" >Back</button> 
</form>-->
	<form  method="post">
		<tr><td><label style="position:absolute;top:44%;left:20%;" >PASSWORD :</label> 
	        <td><input style="position:absolute;top:42%;left:30%;z-index=-1" type="tel" name="PASSWORD" />   </tr>
	        <tr><label style="position:absolute;top:60%;left:20%;" >ENCRYPTION :</label> 
	        <input style="position:absolute;top:58%;left:30%;" type="text" z-index="-1"; disabled/></tr> 
	        <br>
	<button class="button button1" type="submit" name="SUB" style="position:absolute;top:40%;right:30%;" >Generate</button>
	</form>
	</div>
	
	<body>
	</body>
	</html>



