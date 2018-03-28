<!DOCTYPE html>
<html>
<head>
	        <meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />

	<title></title>
</head>
<body>
	<?php
	$co=$_POST['data'];
	$cons="candidates_".$co;
	$con=mysqli_connect('localhost','root','12345');
	if(!$con) echo "cannot connect";
	if(!mysqli_select_db($con,'dvs'))
		echo "cannot connect";
	$const="SELECT distinct CT_CONS_ID,CONS_NAME FROM cand_cons_table";
	$result=mysqli_query($con,$const);
	?>
	<option id="cons" value="Select Candidate" selected="true" disabled="true" readonly="true">Select Constituency</option>
	<?php
	while ($row=mysqli_fetch_array($result)) 
	{
		?>
		<option id="cons" value="<?php echo $row['CT_CONS_ID'] ?>"><?php echo $row['CT_CONS_ID']."-".$row['CONS_NAME'] ?></option>
		<?php
	}

	?>
</body>
</html>
