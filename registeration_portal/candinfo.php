<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
	<link rel="stylesheet" type="text/css" href="form_style.css">
	<title>Candidate Information</title>
</head>
<body>
<br>
<fieldset>
	<form name="FO" method="post">
	Constituency : <select name="CONS">
	<?php
		$con=mysqli_connect('localhost','root','12345');
		if(!$con)
			echo 'cannot connect';
		if(!mysqli_select_db($con,'dvs'))
			echo 'cannot connect';

		$query="SELECT distinct CONS_NAME FROM cand_cons_table";
		
		if($result=mysqli_query($con,$query))
		{
			while($row=mysqli_fetch_array($result))
			{?>
				<option name="CONS" value="<?php echo $row['CONS_NAME']; ?>"><?php echo $row['CONS_NAME']; ?></option>
			<?php
			}	
		}
		else
			echo "query is false";
	?>
	</select>
	</form>
</fieldset>

</body>
</html>