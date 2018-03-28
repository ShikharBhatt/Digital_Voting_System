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
	<body background="shades.png">
	<div >
<form action="fo_intermediate.php" id="back">
	<button class="button button1" form="back" type="submit" name="back" style="position: absolute;margin-top: 0px;margin-left: 0px;" >Back</button>
</form>
	<form name="voter_for_password" id="voter_for_password"  method="post">
		<tr><td><label style="position:absolute;top:44%;left:20%;" >Voter ID :</label> 
	        <td><input style="position:absolute;top:42%;left:30%;" type="tel" name="G_VOTER_ID" minlength="10" maxlength="10" />   </tr>
	        <tr><label style="position:absolute;top:60%;left:20%;" >Password :</label> 
	        <input style="position:absolute;top:58%;left:30%;" type="text" id="psw" disabled/></tr> 
	        <br>
	<button class="button button2" form="voter_for_password" name="SUB" onclick="" style="position:absolute;top:40%;right:30%;" >Generate</button>
	</form>
	</div>
	
	<script type="text/javascript">
		function randomString(length, chars) {
    	alert('hello');
    	var result = '';
    	alert(result);
    	for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    	alert(result);
    	document.getElementById('psw')
	}

	</script>

	</body>
	</html>