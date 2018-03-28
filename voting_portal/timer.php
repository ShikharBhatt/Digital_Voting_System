
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
input[type=radio]:checked
{
  border-radius: 5px;
  height: 2em;
  width: 2em;
  border-color: black;
  color:white; 
}
input[type=radio]:not(:checked)
{
  border-radius: 5px;
  height: 2em;
  width: 2em;
  border-color: black;
  background:black; 
}

tr{

  border-bottom: 1px solid black;
  border-top: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>

<body background="flag4.jpg" style="background-position: center; background-size:100%;">
<br>
<table cellspacing="10">
<tr>
<td align="right">FIELD OFFICER ID: 
<td><input type="text" value="<?php echo $_SESSION['FO_ID'];?>" disabled/> <br>
</tr>
<tr>
<td align="right">VOTER_ID :
<td><input type="text" value="<?php echo $_SESSION['VOTER_ID'];?>" disabled/>
</tr>
<p id="clock"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime()+47000;
// Update the count down every 1 second
var x = setInterval(function() {   
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);   
    document.getElementById("clock").innerHTML = seconds + "s ";
    if (distance <= 0) {
        clearInterval(x);
        document.forms["vote_form"].submit();
		//window.location.href="vportalvoter_final.php";
    }
}, 1000);
</script>

<?php

$con = mysqli_connect('localhost','root','12345');                                     //code for database connectivity
if(!$con) echo 'cannot connect';
if(!mysqli_select_db($con,'dvs'))                                                       //code for selecting database
	echo 'cannot connect';

$check=$_SESSION['VOTER_ID'];
//echo "<br><br> $check";
/*$star="select CAND_ID,FNAME,MNAME,LNAME,PARTY_NAME 
			from candidate_table
			where CAND_ID IN (  select CAND_ID
								from cand_cons_table
								where CT_CONS_ID =( select CONS_ID 
													from voter_table 
													where VOTER_ID='$check'))";                                  //query to retrieve all contesting candidates in voter's constituency
				*/
                          $star="call get_candidate($check)";                     //procedure to get the details of the candidates
				//$star="select CONS_ID from voter_table where VOTER_ID=' $check'";
				
				/*$star=" select CAND_ID
								from cand_cons_table
								where CT_CONS_ID = ( select CONS_ID 
													from voter_table 
													where VOTER_ID='$check')";*/
													
				//$star="select * from voter_table";
				$result=mysqli_query($con,$star);                                              //to execute query on database and store records in 'result' variable 
				//echo $result;
				
				if($result==true)
				{ //mysql_error();
					//echo "<br><br>in iffff";
					?>
					<form name="vote_form" method="post" action="time_script.php">
					<table border="1px" style="font-weight: bold;border-collapse: collapse;" class="vote" cellspacing="10px" cellpadding="10px">
          <tr style="background-color:black; color:white">
            <th width="20%">CAND_ID</th>
            <th width="30%">Name</th>
            <th width="20%">Party Name</th>
            <th width="20%">Symbol</th>
            <th>Choose</th>
          </tr>
       
					<?php
					while($row=mysqli_fetch_array($result))                                    //to fetch records into a 'row' variable
					{	

    				//	echo "<br>";echo "<br>";
						//echo "in while";
    				//	$_SESSION['FNAME']=$row['FNAME'];
    				//	$_SESSION['CAND_ID']=$row['CAND_ID'];

    					?>
    					
    					
    			<tr>
                  <td align="center"><?php echo $row['CAND_ID'];?></td>
                  <td align="center"><?php echo $row['FNAME']." ".$row['MNAME']." ".$row['LNAME'];?></td>
                  <td align="center"><?php echo $row['PARTY_NAME'];?></td>
                  <td align="center"><img src="party_symbol.php?id=<?php echo $row['CAND_ID'] ?>" height="50px" width="50px"></td>
                  <td align="center"><input type="radio" name="vote" value="<?php echo $row['CAND_ID'] ?>" /></td>

              </tr>
						

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
				<tr>
                  <td align="center">--</td>
                  <td align="center">NOTA</td>
                  <td align="center">--</td>
                  <td align="center"><img src="nota.jpg" height="50px" width="50px"></td>
                  <td align="center"><input type="radio" name="vote" value="NULL" checked /></td>

              </tr>
              </table>
					<br><br><br>
					<button class="button button1"  type="submit" name="vote_submit">Submit</button>
					</form>
					<?php
				}	
				else	echo "<br><br>result is false it should never suppose to happennnnnn";
?>			
</body>
</html>