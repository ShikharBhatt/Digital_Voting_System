	<?php
	session_start();
	?>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
	<link rel="stylesheet" type="text/css" href="form_style.css">
		</head>
		    <script type="text/javascript">
            function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
	<body background="shade.png" style="background-position: center; background-size:100%;">
	<header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
    
	<div>
	<!--<button class="button button1"  onclick="ro_intermediate.php;">Back </button>-->
	<form action="ro_intermediate.php" id="back">
	</form>
	<button  class="button button1" form="back" style="background-color:rgb(255,40,40);color:white;border: 2px solid rgb(255,0,0);margin-left: 0px;" >Back </button>

	<form name="update_candidate_script.php" action="update_candidate_script.php" method="post" >
	<br><br><br>
		<tr><td><label style="position:absolute;top:44%;left:25%;" ><font size="5px">Candidate ID :</font></label> 
	        <td><input style="position:absolute;top:42%;left:40%;height:40px;"  type="tel" onkeypress="return isNumberKey(event)" name="UP_CANDIDATE_ID" minlength="6" maxlength="6" autocomplete="off" />   
	        <br>
	<button class="button button1"  type="submit" name="SUB" style="background-color:rgb(0,161,255);color:white;border: 2px solid rgb(0,131,255);position:absolute;top:40%;right:20%;" >UPDATE</button>
	</form>
	</div>
	<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
	</body>
	</html>

	

