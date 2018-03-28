	<?php
	session_start();
	?>
	
	<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
	<style type="text/css">
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width: 150px;
    border-radius: 8px;
}
.button1 {
    background-color: rgb(255,40,40); 
    color: white; 
    border: 2px solid rgb(255,0,0);
    margin-left: 400px;
}

.button1:hover {
    background-color: rgb(255,0,0);
    color: white;
}
	</style>
	<link rel="stylesheet" type="text/css" href="form_style.css">
		<script type="text/javascript">
				function isNumberKey(evt)
    {
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
   	<form action="fo_intermediate.php" method="post">
	<button style="background-color:rgb(255,40,40);color:white;border: 2px solid rgb(255,0,0);margin-left: 0px;" class="button button1" >Back </button>
	</form>
	<div >

	<form name="voter_updation" action="update_voter_script.php" method="post">
		<tr><td><label style="position:absolute;top:44%;left:25%; font-size: 20px;" >Update Voter ID :</label> 
	        <td><input style="position:absolute;top:42%;left:40%;" type="tel" name="UP_VOTER_ID" minlength="10" maxlength="10" autocomplete="off" onkeypress="return isNumberKey(event)" required />   
	        <br>
	<button class="button button1"  type="submit" name="SUB" style="background-color:rgb(0,161,255);color:white;border: 2px solid rgb(0,131,255);position:absolute;top:40%;right:30%;" >UPDATE</button>
	</form>
	</div>
	
			<br><br>
<footer style="height:40px;width: 96.5%;position:absolute;bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
	</body>
	</html>

	

