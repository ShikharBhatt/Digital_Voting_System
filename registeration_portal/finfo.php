<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="form_style.css">
<meta name="viewport" content="width=device-width initial-scale=1.0">
  
  <link rel="shortcut icon" href="India.ico" />
    <script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="w3.css">
	<title>FIELD OFFICER INFORMATION</title
</head>
<body>
<fieldset>
  <form name="FO" method="post">
  Constituency ID : <select id="cons">
  	<option value="" selected="true" disabled="true">Select your constituency</option>
  	<?php
  		$con=mysqli_connect('localhost','root','12345');
		if(!$con) echo 'cannot connect';
		if(!mysqli_select_db($con,'dvs'))

  		echo 'cannot connect';
  		$query="SELECT distinct CONS_ID,CONS_NAME FROM fo_table";
  		$result=mysqli_query($con,$query);

  		while($row=mysqli_fetch_array($result))
  		{?>

  		<option value="<?php echo $row['CONS_ID']?>"><?php echo $row['CONS_ID'].'-'.$row['CONS_NAME']?></option>
  		<?php
  		}
  	?>
  </select>
  </form>
</fieldset>
<br><br>
<div id="result"></div>
<script type="text/javascript">
	$(document).ready(function(){
  
  //alert('in ready');
  $('#cons').on('change',function(){
    var str=$(this).val();
    //alert('in change');
     
        $('#result').load('fdata.php',{'data':str})

  })
})
</script>
</body>
</html>

