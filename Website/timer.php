
<html>
<?php
session_start();
?>
<head>
	        <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

<link rel="stylesheet" type="text/css" href="form_style.css">
<style>
p {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgb(200,0,0);
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        width: 40px;
        border-radius: 8px;
        font-weight: bold;
        font-style: verdana;
        font-size: 40px;
        text-align: left;
}
input[type=text]{
        left: 100px;
}
</style>
</head>

<body>
<br>
Field Officer : <input style="position: absolute;top: 10px;" type="text" value="<?php echo $_SESSION['FO_ID'];?>" disabled/> <br>
<br>
VOTER_ID
<input style="position:absolute;top: 50px ;" type="text" value="<?php echo $_SESSION['VOTER_ID'];?>" disabled/>
<p id="clock"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime()+32000;
// Update the count down every 1 second
var x = setInterval(function() {   
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);   
    document.getElementById("clock").innerHTML = seconds + "s ";
    if (distance <= 0) {
        clearInterval(x);
		window.location.href="vportalvoter_final.php";
    }
}, 1000);
</script>

<?php

$con = mysqli_connect('localhost','root','12345');
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))
	echo 'cannot connect';

$check=$_SESSION['VOTER_ID'];
//echo "<br><br> $check";
$star="select CAND_ID,FNAME,MNAME,LNAME,PARTY_NAME 
			from candidate_table
			where CAND_ID IN (  select CAND_ID
								from cand_cons_table
								where CT_CONS_ID =( select CONS_ID 
													from voter_table 
													where VOTER_ID='$check'))";
				
				//$star="select CONS_ID from voter_table where VOTER_ID=' $check'";
				
				/*$star=" select CAND_ID
								from cand_cons_table
								where CT_CONS_ID = ( select CONS_ID 
													from voter_table 
													where VOTER_ID='$check')";*/
													
				//$star="select * from voter_table";
				$result=mysqli_query($con,$star); //successful execution of query;
				//echo $result;
				
				if($result==true)
				{ //mysql_error();
					//echo "<br><br>in iffff";
					?>
					<form name="vote_form" method="post" action="time_script.php">
					<?php
					while($row=mysqli_fetch_array($result))
					{	

    					echo "<br>";echo "<br>";
						//echo "in while";
    					$_SESSION['FNAME']=$row['FNAME'];
    					$_SESSION['CAND_ID']=$row['CAND_ID'];

    					?>
    					<br><br><br><br>
    					
    					<input type="radio"  name="vote" value="<?php echo $row['CAND_ID'] ?>" /><font color="blue"><?php echo $row['FNAME']." ".$row['MNAME']." ".$row['LNAME']." ".$row['PARTY_NAME']."----".$row['CAND_ID']; ?></font> 
						

						<?php
						//echo $row['CONS_ID'];
						//echo $row['CAND_ID'];
						//echo $row['FNAME'];
						//echo $row['LNAME'];
						//echo $row['MNAME'];
						echo "<br>";
					}
						//else
							//echo "asjdghvaskhjdbshjb";
					?>
					<br><br><br>
					<button class="button button1" type="submit" name="vote_submit">Submit</button>
					</form>
					<?php
				}	
				else	echo "<br><br>result is false";
?>			
</body>
</html>